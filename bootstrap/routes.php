<?php

use light\Routing\Router;

$router = new Router();

$router->get('/', function () use ($router) {
    return 'Light';
});

$router->get('/home', 'IndexController@home');
