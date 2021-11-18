<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::get('http://restcountries.eu/rest/v2/all?lang=fr');
        $countries = $response->json();
        foreach($countries as $country) {
            if (isset($country['translations']['fr'])) {
                \App\Models\Country::create([
                    'name' => mb_strtolower($country['translations']['fr']),
                ]);
            }
        }
    }
}
