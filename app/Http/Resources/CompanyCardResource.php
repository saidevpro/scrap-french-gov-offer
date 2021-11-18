<?php

namespace App\Http\Resources;

use App\Models\Document;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyCardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = $this->resource->toArray();

        $data = array_reduce(array_keys($data), function ($_data, $key) use($data) {
            if (in_array($key, ['id', 'created_at', 'deleted_at'])) {
                return $_data;
            }
            $_data[$key] = $data[$key] ? $data[$key] : '';
            if ($key === 'daily_opening') {
                $_data[$key] = json_decode($_data[$key]);
            }

            if (in_array($key, ['intervention_regions', 'ref_public_clients', 'ref_private_clients', 'certifications']) && $data[$key]) {
                $_data[$key] = json_decode($data[$key], $key === 'certifications' ? true : false);
            }

            return $_data;
        }, []);

        if ($data['logo']) {
            $document = Document::find($data['logo']);
            $data['logo'] = new DocumentResource($document);
        }

        if ($data['galery']) {
            $ids = explode(',', $data['galery']);
            $documents = Document::whereIn('id', $ids)->get();
            $data['galery'] = DocumentResource::collection($documents);
        }

        return $data;
    }
}
