<?php

return [
    // 驱动
    'driver' => 'redis',

    // 过去时间
    'timeout' => 120,

    // 前缀
    'prefix' => 'awheel_prod_',

    // 配置
    'config' => [
        'redis' => [
            'host' => '127.0.0.1',
            'port' => 6379,
            'db' => 0,
            'password' => null
        ],
        'memcached' => [
            'host' => '127.0.0.1',
            'port' => 11211
        ],
        'yac' => []
    ]
];
