<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RandomUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0; $i < 20; $i++) {
            $faker = \Faker\Factory::create();

            $company = Company::factory()->create();
            $user = \App\Models\User::create([
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'account_types_id' => $faker->randomElement([1, 2]),
                'civility' => $faker->randomElement(['monsieur', 'madame']),
                'first_name' => $faker->firstName(),
                'last_name' => $faker->firstName(),
                'code_phone' => "33",
                'phone' => $faker->phoneNumber(),
                'email' => 'neomarche'.rand(1, 500).'@yopmail.com',
                'password' => Hash::make("0000"),
                'company_id' => $company->id,
            ]);

            $company->account_types_id = $user->account_types_id;
            $company->save();
        }
    }
}
