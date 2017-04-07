<?php

use Monolog\Handler\ErrorLogHandler;

return [
    // 项目名称
    'name' => 'Awheel',

    // 项目地址
    'base_url' => 'http://localhost',

    // 开发/调试模式
    'debug' => false,

    // 直接指定日志处理方式
    'log_handler' => new ErrorLogHandler(ErrorLogHandler::OPERATING_SYSTEM, 'ERROR'),

    // 启用组件
    'component' => [
        'awheel\ViewBlade\ViewComponent',
        'awheel\CacheComponent\CacheComponent',
        'awheel\ViewSingle\ViewComponent',
    ]
];
