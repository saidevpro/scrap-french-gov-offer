<?php

namespace Database\Seeders;

use App\Models\CompanyCategory;
use Illuminate\Database\Seeder;

class CompanyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            "Etat et établissement publics de l'Etat (hors armées)" => "buyer",
            "Armées" => "buyer",
            "Région et établissements publics" => "buyer",
            "Département et établissements publics" => "buyer",
            "Commune et établissements publics" => "buyer",
            "Autre" => "buyer",
            "Agroalimentaire" => "provider",
            "Bois/Papier/Carton/Imprimerie" => "provider",
            "Chimie/Parachimie" => "provider",
            "Edition/Communication/Multimédia" => "provider",
            "Etudes et Conseils" => "provider",
            "Machines et équipements" => "provider",
            "Plastique/Caoutchouc" => "provider",
            "Textile/Habillement/Chaussure" => "provider",
            "Banque/Assurance" => "provider",
            "BTP/Matériaux de construction" => "provider",
            "Commerce/Négoce/Distribution" => "provider",
            "Electronique/Electricité" => "provider",
            "Industrie pharmaceutique" => "provider",
            "Informatique/Télécoms" => "provider",
            "Métallurgie/Travail du métal" => "provider",
            "Services aux entreprises" => "provider",
            "Transports/Logistique" => "provider",
        ];

        foreach($categories as $label => $type) {
            if (!CompanyCategory::where('name', $label)->exists()) {
                CompanyCategory::create([
                    'name' => $label,
                    'type' => $type
                ]);
            }
        }
    }
}
