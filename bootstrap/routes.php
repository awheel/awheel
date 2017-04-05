<?php

use awheel\Routing\Router;

$router = new Router();

$router->get('/', function () use ($router) {
    return app()->configGet('app.name');
});

$router->get('/home', 'IndexController@home');
