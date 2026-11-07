<?php

return [
    'mysql_enabled' => (bool) env('SIJAI_MYSQL_ENABLED', false),
    'synthetic_only' => true,
    'server_uuid' => env('SIJAI_MYSQL_SERVER_UUID'),
    'allowed_port' => 33070,
    'databases' => [
        'local' => 'sijai_umkm_g1b1_dev',
        'testing' => 'sijai_umkm_g1b1_test',
    ],
];
