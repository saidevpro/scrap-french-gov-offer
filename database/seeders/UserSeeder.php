<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\CompanyContact;
use App\Models\Contact;
use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $company = Company::factory()->create();
        CompanyContact::create([
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'email' => $faker->email(),
            'phone' => $faker->phoneNumber(),
            'service' => 'Achats',
            'role' => 'Responsable Achat',
            'company_id' => $company->id,
        ]);

        $user = \App\Models\User::factory()->create();
        $user->company_id = $company->id;
        $user->save();

        $company->account_types_id = $user->account_types_id;
        $company->save();
    }
}
