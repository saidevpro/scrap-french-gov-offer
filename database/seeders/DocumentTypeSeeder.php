<?php

namespace Database\Seeders;

use App\Models\DocumentType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'market_notice' => "avis de l'appel d'offre",
            'technical_brief_already_completed' => "Mémoire technique déjà réalisé",
            'customer_reference_list' => "Liste référence clients",
            'product_price_list' => "Liste de prix produits",
            'brochure' => "Brochure",
            'catalog' => "Catalogue",
            'newspaper_article' => "Article journal",
            'client_recommendation_letter' => "Lettre de recommandation client",
            'presentation_file' => "Dossier de présentation",
            'satisfaction_survey' => "Enquête satisfaction",
            'customer_testimonial' => "Témoignage client",
            'company_certification' => "Certification entreprise",
            'company_qualification' => "Qualification entrprise",
            'intervening_diploma' => "Diplôme intervenant",
            'cv' => "CV",
            'cover_image' => "Image de couverture",
            'image_gallery' => "Image galerie",
            'tender_pdf' => "Avis de marché",
            'template' => "Template",
            'dce' => "DCE"
        ];

        foreach($types as $slug => $type) {
            DocumentType::create([
                'name' => $type,
                'slug' => $slug
            ]);
        }
    }
}
