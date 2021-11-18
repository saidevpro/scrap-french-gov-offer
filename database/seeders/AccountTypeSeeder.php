<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['buyer', 'provider']; 
        foreach($types as $type) {
            \App\Models\AccountTypes::create([
                'name' => strtolower($type)
            ]);
        }
    }
}
