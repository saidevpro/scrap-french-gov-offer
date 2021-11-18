<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionResource extends JsonResource
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
            'contract_number' => $this->contract_id,
            'amount' => $this->amount,
            'subscription_date' => date_format(date_create($this->created_at), 'Y-m-d'),
            'expiration_date' => $this->expired_at ? date_format(date_create($this->expired_at), 'Y-m-d') : '',
            'is_expired' => $this->isSubscriptionExpired()
        ];
    }

    /**
     * @return Bool
     */
    private function isSubscriptionExpired()
    {
        $expired_at = date_create($this->expired_at);
        $today = date_create();

        return $today > $expired_at;
    }
}
