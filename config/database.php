<?php

return [
    // 数据库1
    'database1' => [
        'master' => [
            [
                'database_type' => 'mysql',
                'database_name' => 'database1',
                'server' => 'localhost',
                'prefix' => 'aw_',
                'port' => 3306,
                'username' => 'root',
                'password' => '123456',
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
            ]
        ],
        'slave' => [
            [
                'database_type' => 'mysql',
                'database_name' => 'database1',
                'server' => 'localhost',
                'prefix' => 'aw_',
                'port' => 3306,
                'username' => 'root',
                'password' => '123456',
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
            ]
        ]
    ],

    // 数据库2
    'database2' => [
        'master' => [
            [
                'database_type' => 'mysql',
                'database_name' => 'database2',
                'server' => 'localhost',
                'prefix' => 'aw_',
                'port' => 3306,
                'username' => 'root',
                'password' => '123456',
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
            ]
        ],
        'slave' => [
            [
                'database_type' => 'mysql',
                'database_name' => 'database2',
                'server' => 'localhost',
                'prefix' => 'aw_',
                'port' => 3306,
                'username' => 'root',
                'password' => '123456',
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
            ]
        ]
    ]
];
