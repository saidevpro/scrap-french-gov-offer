<?php
namespace App\Services;

use App\Models\Activity;
use App\Models\BudgetType;
use App\Models\Company;
use App\Models\Document;
use App\Models\DocumentType;
use App\Models\ProcedureType;
use App\Models\Tag;
use App\Models\Tender;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DateTime;
use Exception;

class NoumaApiCallerService {
    /**
     * @param
     * @param
     */
    public function __construct(NoumaApiService $noumaapi, Parser $parser)
    {
        $this->nouma_api = $noumaapi;
        $this->parser = $parser;
    }
    /**
     * @return int
     */
    public function fetchMarkets($date = null, $count = null) {
        set_time_limit ( 6000 );
        $date = $date ? $date : date('Y/m/d');;
        $counter = 0;

        foreach($this->nouma_api->fetchTenders(null, $date) as $tenders) {
            foreach($tenders as $k => $t) {
                if (!$this->shouldTenderBeImport($t)) continue; // vérification par titre
                if (!is_null($count) && $counter >= (int) $count) break;
                $counter++;

                $data = $this->nouma_api->fetchTenderByRef($t['id']);

                $city = $this->resolveCity($data['city']);
                $activity = $this->resolveActivity($data['market_type']);
                $procedure_type = $this->resolveProcedureType($data['procedure_type']);
                $budget_type = $this->resolveBudgetType($data['budget'], 'nouma');

                $deadline_date = (new DateTime($data['deadline_date']))->format('Y-m-d');
                $issue_date = (new DateTime($data['issue_date']))->format('Y-m-d');

                $tender = Tender::create([
                    'ref' => strtolower(uniqid()),
                    'source' => 'nouma',
                    'source_ref' => $data['id'],
                    // 'rec_id' => $data['original_ref_id'],
                    'title' => $data['title'],
                    // 'excerpt' => $data['excerpt'],
                    'content' => $data['notice_text'],
                    'city_id' => $city->id ?? null,
                    'department_id' => $city->department_id ?? null,
                    'country_id' => $city->country_id ?? null,
                    'activity_id' => $activity ? $activity->id : null,
                    'procedure_type_id' => $procedure_type ? $procedure_type->id : null,
                    'budget_type_id' => $budget_type ? $budget_type->id : null,
                    'release_date' => $deadline_date,
                    'closing_date' => $issue_date,
                    'link' => $data['absolute_url'],
                    'denomination' => $data['client'],
                    'dce_count' => $data['dce_count']
                ]);

                $this->saveTenderCpv($data['cpv'], $tender);
                $this->saveTenderTags($data['tags'], $tender);
                $this->saveTenderPdf($tender, $data['notice_original_document']);
                $this->saveDCE($tender, $data['supporting_documents']);
            }

            if (!is_null($count) && $counter >= (int) $count) break;
        }


        return $counter;
    }
    /**
     * @param array $data
     * @return Boolean
     */
    private function shouldTenderBeImport(array $data)
    {
        return !Tender::where('title', $data['title'])->exists();
    }
    /**
     * @return \App\Models\City | null
     */
    private function resolveCity(string $city_name = null)
    {
        if (strpos(strtolower($city_name), 'cedex') !== false) {
            $cedex_pos = strpos(mb_strtolower($city_name), 'cedex');
            $city_name = substr($city_name, 0, $cedex_pos-1);
        }else {
            $city_name = $city_name;
        }

        $city_name = str_replace("'", ' ', mb_strtolower($city_name));
        $city_slug = Str::slug($city_name , '-');
        $city = \App\Models\City::where('slug', 'like', '%'.$city_slug.'%')->first();
        return $city ?? null;
    }
    /**
     * @return \App\Models\Activity | null
     */
    private function resolveActivity(string $activity = null)
    {
        if (!$activity) return null;
        return Activity::firstOrCreate([
            'name' => mb_strtolower($activity)
        ]);
    }
    /**
     * @return \App\Models\ProcedureType | null
     */
    private function resolveProcedureType(string $procedure_type = null)
    {
        if (!$procedure_type) return null;

        if (mb_strtolower($procedure_type) === 'procédure formalisée') {
            return ProcedureType::where('slug', 'procedureadapte')->first();
        }
        return ProcedureType::where('slug', 'like', '%'.Str::slug($procedure_type).'%')->first();
    }
    /**
     * @return \App\Models\BudgetType | null
     */
    private function resolveBudgetType(string $budget_type = null, $source = 'nouma')
    {
        if (!$budget_type) return null;

        switch($budget_type) {
            case "SUP_90K":
                $slug = "mapa";
                break;
            default:
                $slug = "fns";
        }

        return BudgetType::where('slug', Str::slug($slug))->first();
    }
    /**
     * @param array $addresses
     * @param Tender $tender
     * @return void
     */
    private function saveTenderCpv($cpvs = null, Tender $tender)
    {
        if (!is_array($cpvs)) return null;

        foreach($cpvs as $cpv) {
            $cpv = \App\Models\Cpv::where('code', 'like', '%'.($cpv['code']).'%')->first();
            if ($cpv) {
                $tender->cpv()->attach($cpv->id);
            }
        }
    }
    /**
     *  @param array $tags
     *  @param Tender $tender
     * @return void
     */
    private function saveTenderTags(array $tags, Tender $tender)
    {
        if (!is_array($tags)) return null;

        foreach($tags as $tag) {
            $tag = Tag::firstOrCreate([
                'name' => mb_strtolower(isset($tag['title']) ? $tag['title'] : $tag['libelle']),
                'code' => isset($tag['code']) ? $tag['code'] : null
            ]);

            $tag->tender()->attach($tender);
        }
    }
    /**
     * @param Tedner $tender
     * @return string?false
     */
    private function saveTenderPdf(Tender $tender, $link)
    {
        if (!$link) return ;

        $contents = file_get_contents($link, false, stream_context_create([
            'ssl' => [
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ]
        ]));
        if (!$contents) {
            return false;
        }
        $filename = Str::random(60).'.pdf';
        $is_download = Storage::disk('tender')->put($filename, $contents);
        if (!$is_download) {
            return false;
        }

        $path = Storage::disk('tender')->path($filename);
        $size = filesize($path);
        $base64 = base64_encode($contents);
        $info = pathinfo($path);
        $document_type = DocumentType::where('slug', 'tender_pdf')->first();
        $document = new Document ([
            'title' => "Avis N° {$tender->ref}",
            'type' => $info['extension'],
            'document_type_id' => $document_type->id,
            'size' => $size,
            'base64' => $base64,
            'path' => $path
        ]);

        $document->documentable()->associate($tender);
        $document->save();

        return $path;
    }
    /**
     * @param Tedner $tender
     * @return string?false
     */
    public function saveDCE(Tender $tender, array $documents = null)
    {
        if (!$documents) return;

        $document_type = DocumentType::where('slug', 'dce')->first();
        foreach($documents as $dce) {
            if (!$dce['thumbnail']) break;
            $path = $this->resolveDCEPathname($dce['thumbnail']);
            $info = pathinfo($path);
            $extension = $info ? $info['extension'] : substr($path , -3, 0);
            try {
                $content = file_get_contents($path, false, stream_context_create([
                    'ssl' => [
                        "verify_peer"=>false,
                        "verify_peer_name"=>false,
                    ]
                ]));
            } catch(\Exception $e) {
                $content = "No content found\n";
            }
            $gpath = Str::random(60).'.'.$extension;
            Storage::disk('dce')->put($gpath, $content);

            $document = new Document ([
                'title' => $dce['name'],
                'type' => $extension,
                'document_type_id' => $document_type->id,
                'size' => $dce['document_size'],
                'base64' => base64_encode($content),
                'path' => $path
            ]);

            $document->documentable()->associate($tender);
            $document->save();
        }
    }
    /**
     * @param string $link
     * @return string
     */
    private function resolveDCEPathname(string $path)
    {
        $path = str_replace('thumbnails', 'partials', $path);
        if (preg_match("#.*\.[a-zA-Z]+\.[a-zA-Z]+$#", $path)) {
            return substr($path , 0, -4);
        }
        return $path;
    }
}
