<?php
// created by BcInstaller
return [
    'Security.salt' => 'jJNV3O5a5DmHV5732JI7K1LKPSE05HZJR0ZKDWZ6',
    'Datasources.default' => [
        'className' => 'Cake\\Database\\Connection',
        'driver' => 'Cake\\Database\\Driver\\Mysql',
        'host' => 'cu-db',
        'port' => '3306',
        'username' => 'root',
        'password' => 'root',
        'database' => 'basercms-update-test',
        'prefix' => '',
        'schema' => '',
        'encoding' => 'utf8mb4',
        'persistent' => '',
        'log' => filter_var(env('SQL_LOG', false), FILTER_VALIDATE_BOOLEAN)
    ],
    'Datasources.test' => [
        'className' => 'Cake\\Database\\Connection',
        'driver' => 'Cake\\Database\\Driver\\Mysql',
        'host' => 'cu-db',
        'port' => '3306',
        'username' => 'root',
        'password' => 'root',
        'database' => 'test_basercms-update-test',
        'prefix' => '',
        'schema' => '',
        'encoding' => 'utf8mb4',
        'persistent' => '',
        'log' => filter_var(env('SQL_LOG', false), FILTER_VALIDATE_BOOLEAN)
    ]
];