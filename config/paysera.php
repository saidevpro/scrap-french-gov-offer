<?php

return [
    'projectid' => env('PAYSERA_PROJECT_ID', '6028'),
    'sign_password' => env('PAYSERA_SIGN_PASSWORD', '73cdb059d0f29f275a34b370f8e4f900'),
    'currency' => env('PAYSERA_CURRENCY', 'EUR'),
    'accepturl' => env('PAYSERA_ACCEPT_URL'),
    'cancelurl' => env('PAYSERA_CANCEL_URL'),
    'defaultCountry' => env('PAYSERA_DEFAULT_COUNTRY', 'fr'),
];
