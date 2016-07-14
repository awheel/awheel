<?php

return [
    // 项目名称
    'name' => 'light',

    // 项目地址
    'base_url' => 'http://localhost',

    // 开发/调试模式
    'debug' => false,

    // 系统日志
    'log_file' => '/tmp/light.log',

    // 日志级别
    'log_level' => 'ERROR',

    // 启用组件
    'component' => [
        'light\Support\LogComponent',
        'light\Soa\SoaComponent',
        'light\Support\RedisComponent',
        'light\View\ViewComponent',
        'light\Cache\CacheComponent',
    ]
];
