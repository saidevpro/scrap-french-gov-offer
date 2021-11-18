<?php

namespace Database\Factories;

use App\Models\Tender;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; 


class TenderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tender::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ref' => Str::random(10),  
            'slug' => Str::random(9),
            'title' => Str::random(30),
            'excerpt' => $this->faker->text(200), 
            'content' => $this->faker->text(),
            'city_id' => $this->faker->randomDigit(), 
            'department_id' => $this->faker->randomDigit() , 
            'country_id' => $this->faker->randomDigit(), 
            'activity_id' => $this->faker->randomDigit(), 
            'procedure_type_id' => $this->faker->randomDigit(), 
            'budget_type_id' => $this->faker->randomDigit(), 
            'state_id' => $this->faker->randomDigit(),
            'release_date' => $this->faker->date('Y/m/d'),
            'closing_date' => $this->faker->date('Y/m/d'), 
            'zip_code' => $this->faker->randomDigit(5), 
            'link' => $this->faker->url(),
            'code' => $this->faker->randomDigit(7), 
            'label' => Str::random(20), 
            'resume' => $this->faker->text(), 
            'denomination' => Str::random(15), 
            'tel' => $this->faker->phoneNumber(),
            'mel' => Str::random(10),
            'url' => $this->faker->url(),
            'url_profil' => $this->faker->url(), 
            'url_information' => $this->faker->url(),
            'url_participation' => $this->faker->url(),
            'place_exec' => Str::random(6),
            'code_nuts' => $this->faker->randomDigit(7), 
            'duration_year' => $this->faker->randomDigit(2),
            'duration_month' => $this->faker->randomDigit(3), 
            'crm_funding' => Str::random(10),
            'crm_legal_form' => Str::random(4),
            'crm_langue' => Str::random(2), 
            'cp_legal_situation' => Str::random(5),
            'cp_eco' => Str::random(4), 
            'cp_tech' => Str::random(3), 
            'ca_ref' => Str::random(6),
            'rc_complement_info' => $this->faker->text() 
        ];
    }
}
