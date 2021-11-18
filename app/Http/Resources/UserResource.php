<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'civility' => $this->civility,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'account_type' => $this->accounttype ? $this->accounttype->name : '',
            'company_type' => $this->company_type ? $this->company_type : '',
            'company_id' => $this->company_id,
            'is_verified' => (bool) $this->is_verify,
            'count_received_publication' => (int) $this->count_received_publication,
        ];

        if ($this->access_token) {
            $entity['access_token'] = $this->access_token;
        }

        if ($this->subscription) {
            $entity['subscription'] = new SubscriptionResource($this->subscription);
        }

        return $entity;
    }
}
