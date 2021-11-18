<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BudgetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $markets = [
            'mapa', // Marchés <90 k€ (MAPA)
            'fns', // Marchés entre 90 k€ et seuils européens
            'joue',
            'dsp',
            'divers'
        ];

        foreach($markets as $market) {
            \App\Models\BudgetType::create([
                'name' => strtolower($market)
            ]);
        }
    }
}
