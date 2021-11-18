<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Department;
use App\Models\Document;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $departments = Department::all();
        $departments = $departments->merge(Region::all())->map(function ($d) {
            return $d->name;
        })->toArray();


        return [
            'logo' => $this->generateLogoBase64(),
            'name' => $this->faker->company(),
            'siret' => str_replace(' ', '', $this->faker->siret()),
            'address_line1' => $this->faker->address(),
            'zip_code' => $this->faker->postcode(),
            'city_id' => rand(1, 30),
            'department_id' => rand(1,5),
            'category_id' => rand(1, 6),
            'country_id' => 78,
            'email' => $this->faker->companyEmail(),
            'phone' => $this->faker->phoneNumber(),
            'legal_form' => 'SARL',
            'creation_date' => date('Y-m-d'),
            'number_employees' => rand(20, 200),
            'fb' => 'https://facebook.com',
            'tw' => 'https://twitter.com',
            'in' => 'https://linkedin.com',
            'ins' => 'https://instagram.com',
            'gp' => 'https://googleplus.com',
            'yt' => 'https://yt.com',
            'search_keywords' => json_encode($this->faker->words(4)),
            'search_xkeywords' => json_encode($this->faker->words(2)),
            'website' => $this->faker->url(),
            'code_naf' => rand(1000, 9999).strtoupper($this->faker->randomLetter),
            'intervention_zone' => 'department',
            'intervention_zones' => json_encode(array_slice($departments, 0, rand(1, 7))),
            'turnover_slice' => rand(1,4),
            'description' => $this->faker->realText(),
            'services' => implode('<br />', $this->faker->words(6)),
            'short_description' => $this->faker->realText(50),
            'year_of_experience' => rand(1, 40),
            'quote_duration' => rand(1, 24),
        ];
    }

    /**
     * @return string
     */
    private function generateLogoBase64 () {
        $pathname = "https://picsum.photos/531/300";
        $base64 = base64_encode(file_get_contents($pathname));
        $hash = hash('sha256', file_get_contents($pathname));

        $document = Document::where('hash', $hash)->first();

        if ($document) return $document;

        $document = new Document([
            'title' => "Company image",
            'type' => 'png',
            'size' => 10000,
            'base64' => $base64,
            'hash' => $hash,
            'documentable_type' => 'logo',
            'documentable_id' => 0
        ]);


        $document->save();

        return $document->id;
    }
}
