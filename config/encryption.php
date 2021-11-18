<?php

return [
    'pbkdf2_item_count' => 1000,
    'pbkdf2_algo' => 'sha256', // This algo is use in hash_pbkdf2 so the algo should be one of hash_algos() function result
    'aes_algo' => 'aes256',
];
