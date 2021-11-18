<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AccountOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = [
            "veille intégrale de NéoMarchés" => "La veille s’adresse aux entreprises qui recherchent une solution complète et efficace  pour la gestion en ligne des avis de marchés, appels d'offres, mapas, avis d'attributions. Nous détectons quotidiennement de nouvelles opportunités d’affaires. Ainsi, , et concentrez-vous sur le pilotage et suivi de votre activité commerciale.", 
            "Accompagnement à la réponse aux appels d'offres" => " Notre accompagnement va porter sur l’ensemble de la chaine de réponse des marchés publics afin de réaliser une rédaction et une constitution d’un dossier complet, optimisé en lien avec les attentes de l’acheteur public. Soit une performance sur : la stratégie, l’organisation et les outils ", 
            "Formation des Entreprises aux marchés publics" => "Nos formations permettent de : performer son mémoire technique, d'apprendre à soumissionner à un marché public , de maîtriser la dématérialisation de factures avec CHORUS PRO, d'acquerir les fondamentaux des achats, de conduire efficacement la sous-traitance..."
        ];
        $id = 1;
        foreach($options as $label => $description) {
            \DB::table('account_options')->insert([
                'name' => mb_strtolower($label),
                'slug' => 'f'.$id++,
                'description' => mb_strtolower($description)
            ]);
        }
    }
}
