<?php

use awheel\Routing\Router;

$router = new Router();

$router->get('/', function () use ($router) {
    return app()->configGet('app.name');
});

$router->get('/index', 'IndexController@index');
$router->get('/cache', 'IndexController@cache');

$router->group(['prefix' => 'view'], function () use ($router) {
    $router->get('/single', 'ViewController@single');
    $router->get('/blade', 'ViewController@blade');
});
