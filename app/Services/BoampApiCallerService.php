<?php
namespace App\Services;

use App\Events\TendersImported;
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
use Illuminate\Support\Facades\DB;
use DateTime;
use Exception;

class BoampApiCallerService {
    /**
     * @var array
     */
    private $extra_fields = [
        'perimetre' , 'statut' , 'deppublication' , 'typepouvoiradjudicateur' , 'pouvoiradjudicateur' , 'avisimplique' => 'donnees.objet.0.avisimplique', 'variantesoui' , 'variantesnon' , 'quantite' , 'reconductions', 'divenlots', 'nbcandidats' , 'fondscommunautairesoui' , 'fondscommunautairesnon', 'criteresattribution' , 'publicationanterieure' , 'receptoffres' , 'receptcandidat', 'limiteenvoiinvit' , 'validiteoffre', 'dureesystemequalification' , 'prestationreserveeoui' , 'prestationreserveenon', 'principales' , 'dureejour' , 'execaddress' , 'execcp', 'execville', 'criteresponderes', 'identity_address', 'critereselection', 'ca_payment_method'
    ];
    /**
     * @param
     * @param
     */
    public function __construct(BoampApiService $boampapiservice, Parser $parser)
    {
        $this->boamp_api = $boampapiservice;
        $this->parser = $parser;
    }
    /**
     * @return int
     */
    public function fetchMarkets($date = null, $count = null) {
        set_time_limit ( 6000 );

        $date = $date ? $date : date('Y/m/d');
        $tenders = $this->boamp_api->fetchTenders($date);

        $data_map = config('tender.boamp_data_map');
        $counter = 0;
        $inserted_tenders_ids = [];

        foreach($tenders as $k => $t) {
            try {
                $tender = $this->boamp_api->fetchTenderByRef($t['value']);
                $data = $this->parser->extractDataFromArray($tender, $data_map);
                $data['title'] = $t['description'];

                if ($data['original_ref_id']) { // is rectificatif tender
                    $ptender = $this->boamp_api->fetchTenderByRef($data['original_ref_id']);
                    $pdata = $this->parser->extractDataFromArray($ptender, $data_map);
                }

                if (!$this->shouldTenderBeImport($data)) {
                    continue;
                }

                if (!is_null($count) && $counter >= (int) $count) break;
                $counter++;

                $city = $this->resolveCity($data['city']);
                $tender_entity = $this->createTenderArrayEntity($data);

                if (isset($pdata)) {
                    $tender_parent_entity = $this->createTenderArrayEntity($pdata);
                    foreach($tender_entity as $key => $value) {
                        if (!$value && $tender_parent_entity[$key]) {
                            $tender_entity[$key] = $tender_parent_entity[$key];
                        }
                    }
                }

                $tender = Tender::create($tender_entity);

                $this->saveTenderCpv($data['cpv'], $tender);
                $this->saveTenderAddress($data['address'], $tender);
                $this->saveTenderTags($data['tags'], $tender);
                $this->saveTenderComplementInfo($data, $tender->id);
                $this->saveTenderCompany($data, $tender, $city);
                $this->saveTenderSearchableContent($data, $tender);

                $inserted_tenders_ids[] = $tender->id;
                $path = $this->saveTenderPdf($tender);
                if ($path) {
                    $pdfText = $this->extractPDFTextContent($path);
                    $tender->searchable_content .=  " ;$pdfText";
                    $tender->save();

                    \App\Models\TenderInfo::create([
                        'label' => 'notice_pdf_content',
                        'value' => $pdfText,
                        'tender_id' => $tender->id
                    ]);
                }

            } catch(Exception $e) {
                //
            }

        }

        if ($inserted_tenders_ids) {
            TendersImported::dispatch($inserted_tenders_ids);
        }

        return $counter;
    }
    /**
     * @param array $data
     * @return array
     */
    private function createTenderArrayEntity(array $data)
    {

        $city = $this->resolveCity($data['city']);
        $activity = $this->resolveActivity( $this->getNotNullValueKey($data['activity']) );
        $procedure_type = $this->resolveProcedureType( $this->getNotNullValueKey($data['procedure_type']) );
        $budget_type = $this->resolveBudgetType( $this->getNotNullValueKey($data['budget_type']) );

        $data['release_date'] = $this->regularizeTimestampsDate($data['release_date']);
        $data['closing_date'] = $this->regularizeTimestampsDate($data['closing_date']);

        return [
            'ref' => strtolower(uniqid()),
            'source' => 'boamp',
            'source_ref' => $data['ref'],
            'rec_id' => $data['original_ref_id'],
            'title' => $data['title'],
            'excerpt' => $data['excerpt'],
            'nature' => $this->getNotNullValueKey($data['nature']),
            'content' => $data['content'],
            'city_id' => $city->id ?? null,
            'department_id' => $city->department_id ?? null,
            'country_id' => $city->country_id ?? null,
            'activity_id' => $activity ? $activity->id : null,
            'procedure_type_id' => $procedure_type ? $procedure_type->id : null,
            'budget_type_id' => $budget_type ? $budget_type->id : null,
            'release_date' => $data['release_date'] ? (new DateTime())->setTimestamp($data['release_date'])->format('Y-m-d') : null ,
            'closing_date' => $data['closing_date'] ? (new DateTime())->setTimestamp($data['closing_date'])->format('Y-m-d') : null,
            'zip_code' => $data['zip_code'],
            'link' => $data['link'],
            'resume' => $data['resume'],
            'denomination' => $data['denomination'],
            'reporter' => $data['reporter'],
            'contact' => $data['contact'],
            'tel' => $data['tel'],
            'mel' => $data['mel'],
            'url' => $data['url'],
            'url_profil' => $data['url_profil'],
            'url_information' => $data['url_information'],
            'url_participation' => $data['url_participation'],
            'place_exec' => $data['place_exec'],
            'code_nuts' => $data['code_nuts'],
            'duration_year' => $data['duration_year'],
            'duration_month' => $data['duration_month'],
            'crm_funding' => $data['crm_funding'],
            'crm_legal_form' => $data['crm_legal_form'],
            'crm_langue' => $data['crm_langue'],
            'cp_legal_situation' => $data['cp_legal_situation'],
            'cp_eco' => $data['cp_eco'],
            'cp_tech' => $data['cp_tech'],
            'ca_ref' => $data['ca_ref'],
            'rc_complement_info' => $data['rc_complement_info']
        ];
    }
    /**
     * @param array $data
     * @return Boolean
     */
    private function shouldTenderBeImport(array $data)
    {
        return !Tender::where('source_ref', $data['ref'])->exists();
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
        return Activity::where('slug', Str::slug($activity))->first();
    }
    /**
     * @return \App\Models\ProcedureType | null
     */
    private function resolveProcedureType(string $procedure_type = null)
    {
        if (!$procedure_type) return null;
        return ProcedureType::where('slug', Str::slug($procedure_type))->first();
    }
    /**
     * @return \App\Models\BudgetType | null
     */
    private function resolveBudgetType(string $budget_type = null)
    {
        if (!$budget_type) return null;
        return BudgetType::where('slug', Str::slug($budget_type))->first();
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
            $cpv = \App\Models\Cpv::where('code', 'like', '%'.($cpv['principal']).'%')->first();
            if ($cpv) {
                $tender->cpv()->attach($cpv->id);
            }
        }
    }
    /**
     * @param array $addresses
     * @param Tender $tender
     * @return void
     */
    private function saveTenderAddress($addresses, Tender $tender)
    {
        if (!is_array($addresses)) return null;

        foreach($addresses as $address) {
            $address = \App\Models\AdditionalAddress::create([
                'type' => $this->getNotNullValueKey($address['type']),
                'denomination' => $address['denomination'],
                'corresponding' => $address['correspondant'],
                'address' => $address['adresse'],
                'tel' => $address['tel'],
                'fax' => $address['fax'],
                'mel' => $address['mel'],
                'url' => $address['url']
            ]);

            $address->tender()->attach($tender->id);
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
     * @param array $data
     * @param array $keys
     * @return array
     */
    private function sanitizeData(array $data, array $keys = null)
    {
        $keys = is_null($keys) ? array_keys($data) : $keys;

        return array_reduce($keys, function ($array, $key) use ($data) {
            if (!isset($data[$key])) {
                return $array;
            };

            $value = $data[$key];

            switch($key) {
                case "criteresponderes":
                    $value = json_encode($value);
                    break;
                case "receptoffres":
                    $value = $this->regularizeTimestampsDate($value);
                    $value = date('Y/m/d H:i:s', $value);
                    break;
                default:
                    if (is_array($value)) {
                        $value = $this->getNotNullValueKey($value);
                    }
            }

            $array[$key] = $value;
            return $array;
        }, []);
    }
    /**
     * @param array $data
     * @param int $tender_id
     * @return
     */
    private function saveTenderSearchableContent(array $data, Tender $tender)
    {
        $array = $this->sanitizeData($data, $this->extra_fields);

        $search_content_fields = ['principales', 'receptoffres', 'execaddress', 'execcp', 'execville', 'criteresponderes', 'identity_address', 'quantite', 'criteresattribution', 'denomination', 'excerpt', 'reporter'];

        $search_content = $this->sanitizeData($data, $search_content_fields);
        $search_content = implode(' ', $search_content);

        if (isset($array['criteresattribution']) && $array['criteresattribution'] === 'criterescctp') {
            $search_content.=" Offre économiquement la plus avantageuse appréciée en fonction des critères énoncés dans le cahier des charges (règlement de la consultation, lettre d'invitation ou document descriptif)";
        }

        $tender->update(['searchable_content' => $search_content]);
    }
    /**
     * @param array $data
     * @param int $tender_id
     * @return void
     */
    private function saveTenderComplementInfo(array $data, $tender_id) {
        $array = $this->sanitizeData($data, $this->extra_fields);

        DB::table('tender_infos')->insert(array_map(function ($key) use($array, $tender_id) {
            return [
                'label' => $key,
                'value' => $array[$key],
                'tender_id' => $tender_id,
            ];
        }, array_keys($array)));
    }
    /**
     * @param array $data
     * @param $city
     * @param Tender $tender
     * @return void
     */
    private function saveTenderCompany(array $data, Tender $tender, $city)
    {
        $company = Company::where(function ($query) use($data) {
            $query->whereNotNull('siret')->where('siret', $data['siret']);
        })->orWhere('name', 'like', "%{$data['denomination']}%")->first();

        if (!$company) {
            $company = \App\Models\Company::create([
                'name' => $data['denomination'],
                'siret' => $data['siret'],
                'address_line1' => $data['identity_address'],
                'zip_code' => $data['zip_code'],
                'city_id' => $city ? $city->id : null,
                'department_id' => $city ? $city->department_id : null,
                'country_id' => $city ? $city->country_id : null,
                'website' => $data['url']
            ]);
        }

        $company->tender()->save($tender);
    }
    /**
     * @param Tedner $tender
     * @return string?false
     */
    private function saveTenderPdf(Tender $tender)
    {
        $link = config('external.boamp_api.tender_pdf_link');
        $link = preg_replace('#\[.*\]#', $tender->source_ref, $link);
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
            'title' => "Avis N° {$tender->source_ref}",
            'type' => $info['extension'],
            'document_type_id' => $document_type->id,
            'size' => $size,
            'base64' => $base64,
            'path' => $path,
            'hash' => hash('sha256', $contents),
        ]);

        $document->documentable()->associate($tender);
        $document->save();

        return $path;
    }
    /**
     * @param \App\Models\Tender $tender
     * @return
     */
    private function extractPDFTextContent(string $path, string $lineseparator  = "<br>")
    {
        $regex = "BT [a-zA-Z0-9\. \/]* \[\((.*)\)\] TJ ET";
        $contents = explode("\n", file_get_contents($path));

        $content_text = "";
        $ignore_next_page = false;
        $merge_next_line = true;
        foreach($contents as $k => $line) {
            if ($k === 0) continue;

            $count = preg_match_all("#$regex#", $line, $matches);
            if ($count && isset($matches[1])) {
                $text = iconv("Windows-1252", "UTF-8", implode('', $matches[1]));
                $text = trim($text);
                $text = str_replace(["\(", "\)"], ["(", ")"], $text);

                if ($text === "page" || $text === '.' || $text === '..................................' || strpos($text, "Attention :")) {
                    $ignore_next_page = true;
                    continue;
                } else if ($ignore_next_page) {
                    $ignore_next_page = false;
                    continue;
                }

                $content_text.= $merge_next_line ? ' '.$text : $lineseparator . $text;

                if (substr($text, -1) === ':' || $text === 'CPV -' || $text === "Références de l'avis initial mis en ligne sur le site BOAMP, annonce n" || $text === 'o' || $text === "Le montant maximum de commandes pour la durée de la période de reconduction n" || $text === 'Annonce No') {
                    $merge_next_line = true;
                } else {
                    $merge_next_line = false;
                }
            }
        }

        return $content_text;
    }
    /**
     * @param array $array
     * @return string
     */
    private function getNotNullValueKey($array) {
        if (!$array) return null;
        $item = array_filter(array_keys($array), function ($key) use ($array) {
            return !is_null($array[$key]);
        });
        $item = array_values($item);
       return $item ? end($item) : null;
    }
    /**
     * @param string|int $date
     * @return string
     */
    private function regularizeTimestampsDate( $date )
    {
        return substr($date, 0, -3);
    }
}
