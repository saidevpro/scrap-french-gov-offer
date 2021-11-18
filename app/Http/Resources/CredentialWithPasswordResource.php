<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CredentialWithPasswordResource extends JsonResource
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
            'uname_email' => $this->username_email,
            'password' => $this->password,
            'domain' => $this->domain
        ];
    }
}
