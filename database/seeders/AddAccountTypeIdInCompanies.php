<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Seeder;

class AddAccountTypeIdInCompanies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        foreach($users as $u) {
            $c = Company::where('id', $u->company_id)->first();

            if ($c) {
                $c->account_types_id = $u->account_types_id;
                $c->save();
            }
        }

    }
}
