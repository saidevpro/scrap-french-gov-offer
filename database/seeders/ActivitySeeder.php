<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = ['service' => 'Services', 'travaux' => 'Travaux', 'fournitures' => 'Fournitures']; 
        foreach($activities as $slug => $activity) {
            \App\Models\Activity::create([
                'name' => mb_strtolower($activity),
                'slug' => mb_strtolower($slug)
            ]);
        }
    }
}
