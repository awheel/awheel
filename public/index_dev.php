<?php

// 定义系统运行环境
define('__ENV__', 'prod');

// 定义系统跟目录
define('__ROOT__', realpath(__DIR__.'/..'));

// 使用 composer 自动加载
require  __ROOT__.'/vendor/autoload.php';

// 初始化应用
$app = new awheel\App(__ROOT__, __ENV__);

// 运行应用
$app->run();
