<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use SebastianBergmann\Template\Template;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccountTypeSeeder::class);
        $this->call(CompanyCategorySeeder::class);
        $this->call(TurnoverSliceSeeder::class);

        if (!App::environment('local')) {
            $this->call(CountrySeeder::class);
        }

        $this->call(RegionDepartmentSeeder::class);

        if (App::environment('local')) {
            $this->call(UserSeeder::class);
        }

        $this->call(TemplateSeeder::class);
        $this->call(DocumentTypeSeeder::class);
        $this->call(ActivitySeeder::class);
        $this->call(BudgetTypeSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(ProcedureSeeder::class);
        $this->call(SubscriptionPackageSeeder::class);
        // $this->call(CpvSeeder::class);
        // $this->call(CitySeeder::class);
    }
}
