<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = file_get_contents(resource_path('seed/regions_departments_cities/cities.csv'));
        $cities = trim($cities);
        $cities = explode("\n", $cities);
        unset($cities[0]);

        $country = \App\Models\Country::where('name', 'france')->first();

        $names = [];
        foreach($cities as $city) {
            list($id,$department_code,$insee_code,$zip_code,$name,$slug,$gps_lat,$gps_lng) = explode(',', $city);
            $department = \App\Models\Department::where('code', $department_code)->first();
            $name = mb_strtolower(trim($name, '"'));
            if (in_array($name, $names)) continue;

            $names[] = $name;
            \App\Models\City::create([
                'name' => str_replace('-', ' ', $name),
                'code' => $zip_code,
                'department_id' => $department ? $department->id : null,
                'country_id' => $country ? $country->id : null,
                'gps_lat' => $gps_lat,
                'gps_lng' => $gps_lng
            ]);
        }
    }
}
