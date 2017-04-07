<?php

return [
    'cluster' => [
        'cluster' => true,
        'nodes' => [
            ['host' => '127.0.0.1', 'port' => 6369, 'timeout' => 3],
            ['host' => '127.0.0.1', 'port' => 6379, 'timeout' => 3],
            ['host' => '127.0.0.1', 'port' => 6389, 'timeout' => 3],
        ],
    ],
    'user_cache' => [
        'cluster' => false,
        'host' => '127.0.0.1',
        'port' => 6379,
        'password' => 'replace:here',
        'database' => 0,
        'timeout' => 3
    ]
];
