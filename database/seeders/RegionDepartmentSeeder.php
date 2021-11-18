<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionDepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = file_get_contents(resource_path('seed/regions_departments_cities/regions.csv'));
        $regions = trim($regions);
        $regions = explode("\n", $regions);
        unset($regions[0]);

        $country = \App\Models\Country::where('name', 'france')->first();

        foreach($regions as $region) {
            list($_id, $code, $name, $slug) = explode(",", $region);
            \App\Models\Region::create([
                'name' => mb_strtolower(trim($name, '"')),
                'code' => $code,
                'country_id' => $country ? $country->id : null,
            ]);
        }

        $departments = file_get_contents(resource_path('seed/regions_departments_cities/departments.csv'));
        $departments = explode("\n", $departments);
        unset($departments[0]);

        foreach($departments as $department) {
            if (!$department) continue;

            list($_id, $region_code, $code, $name, $slug) = explode(",", $department);
            $region = Region::where('code', $region_code)->first();
            \App\Models\Department::create([
                'name' => mb_strtolower(trim($name, '"')),
                'code' => $code,
                'region_id' => $region ? $region->id : null,
                'country_id' => $country ? $country->id : null
            ]);
        }

    }
}
