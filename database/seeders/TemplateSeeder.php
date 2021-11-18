<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\DocumentType;
use App\Models\User;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $dir = 'app\templates\\';
        $dirpath = storage_path($dir);

        if (!is_dir($dirpath)) {
            $this->command->getOutput()->writeln("<error>Le dossier `{$dirpath} n'existe pas.` </error>");
            return;
        }

        $paths = scandir($dirpath);
        $paths = array_slice($paths, 2);

        if (!$paths) {
            $this->command->getOutput()->writeln("<error>Aucun template à importer n'a été trouvé</error>");
            return;
        }


        foreach($paths as $filename) {
            $path = storage_path($dir.$filename);
            if (is_file($path) && file_exists($path)) {
                $doc_type = DocumentType::where('name', 'template')->first();
                $doc_type_id = $doc_type ? $doc_type->id : 0;
                $base64 = base64_encode(file_get_contents($path));
                $info = pathinfo($path);
                $document = new Document([
                    'title' => $filename ,
                    'type' => $info['extension'],
                    'document_type_id' => $doc_type_id,
                    'size' => filesize($path),
                    'base64' => $base64,
                    'path' => $path,
                    'hash' => hash('sha256', file_get_contents($path)),
                    'documentable_type' => \App\Models\User::class,
                    'documentable_id' => 0
                ]);

                $document->save();
            }
        }
    }
}
