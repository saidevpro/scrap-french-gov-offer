<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CpvResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        parent::toArray($request);
        return [
            'name' => $this->name, 
            'code' => $this->code
        ];
    }
}
