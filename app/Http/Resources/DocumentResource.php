<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'size' => $this->size,
            'type' => $this->type,
            'extension' => $this->type,
            'document_type' => $this->doctype ? $this->doctype->name : null,
            'entity_id' => $this->documentable_id,
            'base64' => $this->base64,
            'created_at' => date_format(date_create($this->created_at), 'Y-m-d'),
            'folder_id' => $this->folder_id,
        ];
    }
}
