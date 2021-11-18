<?php

namespace Database\Seeders;

use App\Models\TurnoverSlice;
use Illuminate\Database\Seeder;

class TurnoverSliceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slices = ["0 à 30 000", "30 000 à 80 000", "80 000 à 250 000", "250 000 à 1 000 000", "1 000 000 à +"]; 

        foreach($slices as $slice) {
            TurnoverSlice::create([
                'name' => $slice
            ]); 
        }
    }
}
