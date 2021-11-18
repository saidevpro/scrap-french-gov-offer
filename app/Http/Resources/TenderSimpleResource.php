<?php

namespace App\Http\Resources;

use App\Models\Document;
use App\Models\DocumentType;
use DateTime;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TenderSimpleResource extends JsonResource
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

        $is_followed_by_user = false;
        $this->favoris->each(function ($f, $k) use(&$is_followed_by_user)  {
            if ($f->user_id == Auth::id()) {
                $is_followed_by_user = true;
            }
        });

        $before_end_duration = (int) date_diff(new \DateTime($this->closing_date), new DateTime())->days;
        $before_end_duration = (new \DateTime($this->closing_date) > new DateTime()) ? $before_end_duration : (-1) * $before_end_duration;

        return [
            'id' => $this->id,
            'ref' => $this->source_ref,
            'title' => $this->title,
            'denomination' => $this->denomination,
            'zip' => $this->zip_code,
            'address' => $this->address,
            'city' => $this->city ? $this->city->name : null,
            'department' => $this->department ? $this->department->name : null,
            'region' => $this->department && $this->department->region ? $this->department->region->name : null,
            'activity' => $this->activity ? $this->activity->name : null,
            'procedure' => $this->procedure ? $this->procedure->name : null,
            'budget' => $this->budget ? $this->budget->name : null,
            'publish_date' => $this->release_date,
            'is_publish_today' => date('Y-m-d', strtotime($this->release_date)) === date('Y-m-d'),
            'closing_date' => $this->closing_date,
            'before_end_duration' =>  $before_end_duration,
            'is_followed' => $is_followed_by_user,
            'procedure' => $this->procedure ? $this->procedure->name : null,
            'count_dce' => (int) $this->dce_count,
            'cpv' => CpvResource::collection($this->cpv),
            'matched_researchs' => $this->matched_researchs
        ];
    }
}
