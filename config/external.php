<?php

return [
    'front_login_uri' => env('APP_FRONT_LOGIN_URI'),
    'front_url' => env('APP_FRONT_URL'),
    'front_research_uri' => env('APP_FRONT_RESEARCH_PROFIL_URL', 'entreprise/profil-de-recherche'),
    'boamp_api' => [
        'fetch_tenders_url' => 'http://www.api.dila.fr/opendata/api-boamp/annonces/search?criterion=dateparution=[date]',
        'fetch_tender_url' => 'http://www.api.dila.fr/opendata/api-boamp/annonces/v230/[tender_id]',
        'tender_pdf_link' => 'https://www.boamp.fr/avis/pdf/[ref]'
    ],
    'nouma_api' => [
        'api_token' => 'f61e957724ab6c583759a8c6b6b38469',
        'secret_key' => '68eGQYtaeMDW',
        'auth_token' => 'ae49ddfa9a601c753cedda43374d700cf96dd1b9',
        'host' => 'api.nouma.fr',
        'fetch_tenders_url' => "https://api.nouma.fr/search/v2/tender/?[params]",
        'fetch_tender_url' => 'https://api.nouma.fr/tender/[tender_id]',
    ],
    'google_map' => [
        'api_key' => 'AIzaSyCcIWz7zqQGos0sX6B-qYawgaYZB04gKsg',
        'fetch_location_url' => 'https://maps.google.com/maps/api/geocode/json?key=[api_key]&address=[address]&sensor=false&language=fr'
    ]
];
