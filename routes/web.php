<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group(['prefix' => '/users'], function () use ($router) {
    $router->get('/', 'UsersController@get');
});
