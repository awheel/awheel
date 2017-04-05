<?php

// 定义系统运行环境, 默认为 prod
!defined('__ENV__') && define('__ENV__', 'prod');

// 定义系统跟目录, 如果使用 Phar 打包, 需要去掉下面的 realpath 调用
!defined('__ROOT__') && define('__ROOT__', realpath(__DIR__.'/..'));

// 使用 composer 自动加载, 不要再在任何地方进行 require, include 操作
require  __ROOT__.'/vendor/autoload.php';

// 初始化应用
$app = new awheel\App(__ROOT__, __ENV__);

// 注册 Kernel: Console|Http
$app->registerKernel();

return $app;
