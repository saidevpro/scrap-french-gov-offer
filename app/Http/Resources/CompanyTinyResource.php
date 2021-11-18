<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyTinyResource extends JsonResource
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
            'name' => $this->name,
            'category' => $this->category ? $this->category->name : '',
            'email' => $this->email,
            'phone' => $this->phone,
            'zip_code' => $this->zip_code,
            'city' => $this->city ? $this->city->name : '',
            'address_line1' => $this->address_line1,
            'address_line2' => $this->address_line2,
            'services' => nl2br($this->services),
            'logo' => $this->logoDocument,
            'user_id' => $this->user ? $this->user->id : null,
        ];
    }
}
