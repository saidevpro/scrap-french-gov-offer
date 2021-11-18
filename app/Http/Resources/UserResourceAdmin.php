<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResourceAdmin extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $entity =  [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'civility' => $this->civility,
            'phone' => $this->phone,
            'is_active' => $this->is_verify,
            'email' => $this->email,
            'fonction' => $this->fonction,
            'account_type' => $this->accounttype ? $this->accounttype->name : '',
            'company_id' => $this->company_id,
            'register_at' => date_format(date_create($this->created_at), 'Y-m-d'),
        ];

        if ($this->access_token) {
            $entity['access_token'] = $this->access_token;
        }

        return $entity;
    }
}
