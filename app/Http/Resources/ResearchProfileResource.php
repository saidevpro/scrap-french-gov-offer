<?php

namespace App\Http\Resources;

use App\Models\ResearchProfileData;
use App\Services\TenderSearchService;
use App\Traits\TenderSearchable;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class ResearchProfileResource extends JsonResource
{
    use TenderSearchable;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $state = $this->getState();
        $days = array_map(function ($day) {
            return (int) $day;
        }, $this->remember_days ? explode(',', $this->remember_days) : []);

        return [
            'id' => $this->id,
            'title' => $this->name,
            'result_count' => $this->getResultCount(),
            'lastview_at' => $this->lastview_date,
            'created_at' => $this->created_at,
            'link' => $this->link,
            'state' => $state ? $state : 'all',
            'days' => $days,
            'activities' => $this->getActivities(),
            'departments' => $this->getDepartments(),
            'regions' => $this->getRegions()
        ];
    }
    /**
     * @return int
     */
    private function getResultCount()
    {
        $tenderSearcher = new TenderSearchService();
        $tenderSearcher->appendGlobalScope();

        $params = $this->getReseachProfileParams();

        $this->fillTenderSearchServiceWithParams($tenderSearcher, $params);

        return $tenderSearcher->count();
    }
    /**
     * @return array
     */
    private function getReseachProfileParams()
    {
        $data = ResearchProfileData::where('research_profile_id', $this->id)->get();

        $array = [];
        foreach ($data as $entity) {
            if (!isset($array[$entity['label']])) {
                $array[$entity['label']] = [];
            }

            array_push($array[$entity['label']], $entity['value']);
        }

        return $array;
    }
    /**
     * @return string
     */
    public function getState()
    {
        $data = ResearchProfileData::where('research_profile_id', $this->id)
                            ->where('label', 'state')
                            ->first();

        if ($data) return $data->value;
        return null;
    }
    /**
     * @return Collection
     */
    private function getActivities()
    {
        return DB::table('research_profile_data')
                    ->select('activities.name', 'activities.name')
                    ->join('activities', 'research_profile_data.value', 'activities.slug')
                    ->where('research_profile_data.label', 'activities')
                    ->where('research_profile_data.research_profile_id', $this->id)
                    ->get();
    }
    /**
     * @return Collection
     */
    private function getDepartments()
    {
        return DB::table('research_profile_data')
                    ->select('departments.name', 'departments.slug')
                    ->join('departments', 'research_profile_data.value', 'departments.slug')
                    ->where('research_profile_data.label', 'departments')
                    ->where('research_profile_data.research_profile_id', $this->id)
                    ->get();
    }
    /**
     * @return Collection
     */
    private function getRegions()
    {
        return DB::table('research_profile_data')
                    ->select('regions.name', 'regions.slug')
                    ->join('regions', 'research_profile_data.value', 'regions.slug')
                    ->where('research_profile_data.label', 'regions')
                    ->where('research_profile_data.research_profile_id', $this->id)
                    ->get();
    }
}
