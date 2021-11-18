<?php

namespace App\Http\Resources;

use App\Models\Department;
use App\Models\Document;
use App\Models\Region;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = $this->resource->toArray();

        $data = array_reduce(array_keys($data), function ($_data, $key) use($data) {
            if (in_array($key, ['created_at', 'deleted_at', 'updated_at'])) {
                return $_data;
            }
            $_data[$key] = $data[$key] ? $data[$key] : '';
            if ($_data[$key] && in_array($key, ["certifications", "intervention_regions", "ref_public_clients", "ref_private_clients", "working_days", "search_keywords", "search_xkeywords", 'intervention_zones'])) {
                $_data[$key] = json_decode($_data[$key], true);
            }
            if ($key === 'services') {
                $_data[$key] = nl2br($data[$key]);
            }
            return $_data;
        }, []);

        $data['category'] = $this->category ? $this->category->name : null;
        $data['city'] = $this->city && is_object($this->city) ? $this->city->name : $this->city;
        $data['turnover'] = $this->turnover ? $this->turnover->name : null;
        $data['is_page_published'] = (bool) $this->is_page_published;

        if ($data['logo'] && $document = Document::find($data['logo'])) {
            $data['logo'] = new DocumentResource($document);
        }

        if ($data['cover_image'] && $document = Document::find($data['cover_image'])) {
            $data['cover_image'] = new DocumentResource($document);
        }

        if ($data['galery']) {
            $ids = explode(',', $data['galery']);
            $documents = Document::whereIn('id', $ids)->get();
            $data['galery'] = DocumentResource::collection($documents);
        }

        if ($data['presentation_documents']) {
            $ids = json_decode($data['presentation_documents']);
            $documents = Document::whereIn('id', $ids)->get();
            $data['presentation_documents'] = DocumentResource::collection($documents);
        }

        if ($this->resource->contacts) {
            $data['contacts'] = $this->resource->contacts->map(function ($contact) {
                return [
                    'first_name' => $contact['first_name'],
                    'last_name' => $contact['last_name'],
                    'email' => $contact['email'],
                    'phone' => $contact['phone'],
                    'service' => $contact['service'],
                    'role' => $contact['role'],
                ];
            });
        }

        if ($data['intervention_zones'] && is_array($data['intervention_zones'])) {
            $data['formated_zones'] = $this->zone_type === 'regions' ? $data['intervention_zones'] : $this->getCompanyInterventionDepartments($data['intervention_zones']);
        }

        $data['user_id'] = $this->user ? $this->user->id : null;

        return $data;
    }
    /**
     * @return array
     */
    public function getCompanyInterventionDepartments(array $departments)
    {
        $slugs = array_map(function ($department) {
            return Str::slug($department);
        }, $departments);

        $departments = Department::whereIn('slug', $slugs)->with('region')->get();

        $entity = [];

        foreach($departments as $department) {
            if (!isset($department->region)) continue;

            if (!isset($entity[$department->region->name])) {
                $entity[$department->region->name] = [];
            }

            array_push($entity[$department->region->name], $department->name);
        }

        return $entity;
    }
}
