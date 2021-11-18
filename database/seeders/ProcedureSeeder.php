<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $procedures = [
            'procedureadapte' => 'Procédure adaptée / MAPA',
            'negocie' => 'Procédure négociée',
            'ouvert' => 'Procédure ouverte',
            'restreint' => 'Procédure restreinte', 
            'concession' => 'Concession',
            'dialoguecompetitif' => 'Dialogue compétitif',
            'autre' => 'Autre'
        ]; 

        foreach($procedures as $slug => $name) {
            \App\Models\ProcedureType::create([
                'name' => mb_strtolower($name), 
                'slug' => mb_strtolower($slug ), 
                'origine_procedure_type_id' => rand(1, 3)
            ]); 
        }
    }
}
