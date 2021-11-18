<?php

namespace Database\Seeders;

use App\Traits\Importable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class ImportCompaniesSeeder extends Seeder
{
    use Importable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dir = 'app/imports/';
        $dirpath = storage_path($dir);

        if (!is_dir($dirpath)) {
            $this->command->getOutput()->writeln("<error>Le dossier `{$dirpath} n'existe pas.` </error>");
            return;
        }

        $paths = scandir($dirpath);
        $files = array_slice($paths, 2);

        foreach($files as $filename) {
            $pathname = storage_path($dir.$filename);
            $info = pathinfo($pathname);

            if ($info['filename'] === 'buyers') {
                $count = $this->importCompanies($pathname, $info['extension']);
                Log::info("$count companies imported successfully");
            }
        }
    }
}
