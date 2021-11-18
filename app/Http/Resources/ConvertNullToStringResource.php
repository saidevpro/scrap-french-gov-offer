<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConvertNullToStringResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $resource = $this->resource->toArray(); 

        $data = []; 

        foreach($resource as $key => $value) {
            $data[$key] = is_null($value) ? '' : $value;
        }

        return $data; 
    }
}
