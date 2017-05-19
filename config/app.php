<?php

use Monolog\Handler\ErrorLogHandler;

return [
    // 项目名称
    'name' => 'Awheel',

    // 项目地址
    'base_url' => 'http://localhost',

    // 时区
    'timezone' => 'Asia/Shanghai',

    // 开发/调试模式
    'debug' => false,

    // 直接指定日志处理方式
    'log_handler' => new ErrorLogHandler(ErrorLogHandler::OPERATING_SYSTEM, 'ERROR'),

    // 类别名
    'aliases' => [
        'router' => awheel\Routing\Router::class,
        'request' => awheel\Http\Request::class,
        'response' => awheel\Http\Response::class,
    ]
];
