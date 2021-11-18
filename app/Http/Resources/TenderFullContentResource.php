<?php

namespace App\Http\Resources;

use App\Models\Document;
use App\Models\DocumentType;
use App\Models\Tender;
use Illuminate\Http\Resources\Json\JsonResource;

class TenderFullContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $linked_by_location = TenderSimpleResource::collection($this->getNearByTenders());
        $linked_by_denomination = TenderSimpleResource::collection($this->getSameDenominationTenders());
        $extra_infos = $this->getTenderExtraInformation(['principales', 'receptoffres', 'dureejour', 'execaddress', 'execcp', 'execville', 'criteresponderes', 'identity_address', 'quantite', 'criteresattribution', 'critereselection', 'ca_payment_method', 'notice_pdf_content']);
        $dce_type = DocumentType::where('slug', 'dce')->first();
        $dce_documents = $dce_type ? Document::where([
            'document_type_id' => $dce_type->id,
            'documentable_id' => $this->id
        ])->get() : [];
        $complementary_address = $this->resource->complementary_address->toArray();

        return array_merge(
            (new TenderSimpleResource($this->resource))->toArray($request),
            $extra_infos,
            [
                'is_neo_market' => $this->source === 'neomarches',
                'reporter' => $this->reporter,
                'buyer_mail' => $this->mel,
                'buyer_url' => $this->url,
                'url_profil' => $this->url_profil,
                'excerpt' => $this->excerpt,
                'dce' => DocumentResource::collection($dce_documents),
                'tags' => TagResource::collection($this->tags),
                'have_extra_infos' => (bool) $extra_infos,
                'complementary_address' => $complementary_address,
                'cp_legal_situation' => $this->cp_legal_situation,
                'cp_eco' => $this->cp_eco,
                'cp_tech' => $this->cp_tech,
                'ca_ref' => $this->ca_ref,
                'linked_tenders' => [
                    'by_location' => $linked_by_location,
                    'by_denomination' => $linked_by_denomination
                ],
                'notice_pdf' => $this->document ? new DocumentResource($this->document) : null,
            ]
        );
    }
    /**
     * @return Collection
     */
    private function getNearByTenders()
    {
        if (!$this->city_id) {
            return [];
        }

        return Tender::where('id', '!=', $this->id)->where(function ($query) {
            $query->where('city_id', $this->city_id)
                    ->orWhere('department_id', $this->department_id);
        })->limit(5)->get();
    }
    /**
     * @return Collection
     */
    private function getSameDenominationTenders()
    {
        if (!$this->denomination) {
            return [];
        }

        return Tender::where('id', '!=', $this->id)
                    ->where('denomination', 'like', $this->denomination)
                    ->limit(5)
                    ->get();
    }
    /**
     * @return array
     */
    private function getTenderExtraInformation(array $keys = null)
    {
        $infos = $this->resource->infos;
        if ($keys) {
            $infos = $infos->filter(function ($info) use($keys) {
                return in_array($info['label'], $keys);
            });
        }

        $collection = [];
        $infos->each(function ($info) use(&$collection) {
            $value = $info['value'];
            if ($info['label'] == 'criteresponderes') {
                $value = json_decode($value);
            }
            $collection[$info['label']] = $value;
        });

        return $collection;
    }
}
