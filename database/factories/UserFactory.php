<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'account_types_id' => $this->faker->randomElement([1, 2]),
            'civility' => $this->faker->randomElement(['monsieur', 'madame']),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->firstName(),
            'code_phone' => "33",
            'phone' => $this->faker->phoneNumber(),
            'email' => 'neomarche@yopmail.com',
            'password' => Hash::make("0000"),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
