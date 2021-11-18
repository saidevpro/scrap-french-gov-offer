<?php
namespace App\Traits;

use App\Models\AccountTypes;
use App\Models\City;
use App\Models\Company;
use App\Models\MetaCompany;
use Illuminate\Support\Str;

trait Importable {
    /**
     * @param string $pathname
     * @return int
     */
    public function importCompanies(string $file_pathname, string $fileextension, string $type = 'buyer')
    {
        switch($fileextension) {
            case "xls":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                break;

            case "xlsx":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                break;

            case "csv":
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                break;
        }

        $spreadsheet = $reader->load($file_pathname);
        $data = $spreadsheet->getSheet(0)->toArray();
        $account_type = AccountTypes::where('slug', $type)->first();

        foreach($data as $k => $row) {
            if ($k == 0) continue;

            $city = Str::slug($row[4]);

            $city = City::where('slug', 'like', "%$city%")->first();

            $company = Company::create([
                'name' => $row[0],
                'address_line1' => $row[1],
                'address_line2' => $row[2],
                'city_id' => $city ? $city->id : null,
                'department_id' => $city ? $city->department_id : null,
                'zip_code' => $row[3],
                'phone' => $row[8],
                'website' => $row[11],
                'account_types_id' => $account_type ? $account_type->id : null,
            ]);

            MetaCompany::insert([
                [
                    'label' => 'mayor_civility',
                    'value' => $row[5],
                    'company_id' => $company->id
                ],
                [
                    'label' => 'mayor_first_name',
                    'value' => $row[6],
                    'company_id' => $company->id
                ],
                [
                    'label' => 'mayor_last_name',
                    'value' => $row[7],
                    'company_id' => $company->id
                ],
                [
                    'label' => 'fax',
                    'value' => $row[9],
                    'company_id' => $company->id
                ],
            ]);

        }

        return count($data) - 1;
    }


}
