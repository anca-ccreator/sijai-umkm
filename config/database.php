<?php

$connection = [
    'driver' => 'mysql',
    'host' => env('DB_HOST', env('MYSQLHOST', '127.0.0.1')),
    'port' => env('DB_PORT', env('MYSQLPORT', '33070')),
    'database' => env('DB_DATABASE', env('MYSQLDATABASE', 'sijai_umkm_g1b1_dev')),
    'username' => env('DB_MIGRATOR_USERNAME', env('DB_USERNAME', env('MYSQLUSER', 'sijai_dev_migrator'))),
    'password' => env('DB_MIGRATOR_PASSWORD', env('DB_PASSWORD', env('MYSQLPASSWORD', ''))),
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'strict' => true,
    'engine' => 'InnoDB',
    'options' => [PDO::ATTR_EMULATE_PREPARES => false],
];

return [
    'default' => 'mysql',
    'connections' => [
        'mysql' => $connection,
        'mysql_migrations' => $connection,
    ],
    'migrations' => [
        'table' => 'migrations',
        'update_date_on_publish' => true,
    ],
];
