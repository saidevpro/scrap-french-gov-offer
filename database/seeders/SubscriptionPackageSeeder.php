<?php

namespace Database\Seeders;

use App\Models\SubscriptionPackage;
use Illuminate\Database\Seeder;

class SubscriptionPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubscriptionPackage::create([
            'name' => 'Forfait mensuel',
            'duration' => 30,
            'short_description' => 'Abonnement mensuel de 30 jours'
        ]);

        SubscriptionPackage::create([
            'name' => 'Forfait annuel',
            'duration' => 60,
            'short_description' => 'Abonnement annuel de 60 jours'
        ]);
    }
}
