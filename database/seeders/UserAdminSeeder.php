<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        \App\Models\User::create([
            'email' => 'neomarcheadmin@yopmail.com',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'account_types_id' => $faker->randomElement([1, 2]),
            'civility' => $faker->randomElement(['monsieur', 'madame']),
            'first_name' => $faker->firstName(),
            'last_name' => $faker->firstName(),
            'code_phone' => "+33",
            'phone' => $faker->phoneNumber(),
            'password' => Hash::make("0000"),
            'is_admin' => true
        ]);
    }
}
