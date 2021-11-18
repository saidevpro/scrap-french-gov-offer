<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class MessageResource extends JsonResource
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
            'sender_id' => $this->user_from,
            'receiver_id' => $this->user_to,
            'sender' => new TinyUserResource($this->from),
            'content' => nl2br($this->content),
            'created_at' => date_format(date_create($this->created_at), 'Y/m/d H:i:s'),
            'was_seen' => (bool) $this->seen,
            'seen_date' => $this->seen_date,
            'is_sender' => $this->user_from === Auth::id()
        ];
    }
}
