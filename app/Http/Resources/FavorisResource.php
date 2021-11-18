<?php

namespace App\Http\Resources;

use App\Models\Document;
use App\Models\Folder;
use Illuminate\Http\Resources\Json\JsonResource;

class FavorisResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $folder = $this->folder_id ? Folder::find($this->folder_id) : null;
        $documents = $this->getTenderDocuments();

        return [
            'id' => $this->tender->id,
            'ref' => $this->tender->ref,
            'title' => $this->tender->title,
            'denomination' => $this->tender->denomination,
            'zip' => $this->tender->zip_code,
            'city' => $this->tender->city ? $this->tender->city->name : null,
            'procedure' => $this->tender->procedure ? $this->tender->procedure->name : null,
            'folder_id' => $this->folder_id,
            'folder_name' => $folder ? $folder->name : null,
            'follow_id' => $this->id,
            'documents' => DocumentResource::collection($documents),
        ];
    }
    /**
     * @return Collection
     */
    private function getTenderDocuments()
    {
        return Document::where([
            'documentable_type' => \App\Models\UserTenderDocument::class,
            'documentable_id' => $this->tender->id
        ])->get();
    }
}
