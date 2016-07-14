<?php

return [
    // 驱动
    'driver' => 'mysql',

    // PDO 数据获取方式
    'fetch' => PDO::FETCH_ASSOC,

    // 数据库配置
    'config' => [
        'light' => [
            'master' => [
                'server' => 'localhost',
                'database' => 'light',
                'port' => 3306,
                'username' => 'root',
                'password' => '123456',
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
            ],
            'slave' => [
                [
                    'server' => 'localhost',
                    'database' => 'light',
                    'port' => 3306,
                    'username' => 'root',
                    'password' => '123456',
                    'charset' => 'utf8',
                    'collation' => 'utf8_unicode_ci',
                ],
                [
                    'server' => 'localhost',
                    'database' => 'light',
                    'port' => 3306,
                    'username' => 'root',
                    'password' => '123456',
                    'charset' => 'utf8',
                    'collation' => 'utf8_unicode_ci',
                ]
            ]
        ]
    ]
];
