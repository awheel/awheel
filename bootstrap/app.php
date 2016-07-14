<?php

// 定义系统跟目录, 如果使用 Phar 打包,  需要去掉下面的 realpath 调用
define('__ROOT__', realpath(__DIR__.'/..'));

// 使用 composer 自动加载, 不要再在任何地方进行 require, include 操作
require  __ROOT__.'/vendor/autoload.php';

// 初始化应用
$app = new light\App();

// Http Kernel
$app->register('HttpKernel', new light\Http\Kernel($app));

// Console Kernel
$app->register('ConsoleKernel', new light\Console\Kernel($app));

return $app;
