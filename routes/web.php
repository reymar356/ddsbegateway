<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middleware'=>'client.credentials'],function() use($router){

$router->get('/users1', 'Blog1Controller@index');
$router->post('/users1', 'Blog1Controller@add');
$router->get('/users1/{id}', 'Blog1Controller@show');
$router->put('/users1/{id}', 'Blog1Controller@update');
$router->patch('/users1/{id}', 'Blog1Controller@update');
$router->delete('/users1/{id}', 'Blog1Controller@delete');

$router->get('/users2', 'Blog2Controller@index');
$router->post('/users2', 'Blog2Controller@add');
$router->get('/users2/{id}', 'Blog2Controller@show');
$router->put('/users2/{id}', 'Blog2Controller@update');
$router->patch('/users2/{id}', 'Blog2Controller@update');
$router->delete('/users2/{id}', 'Blog2Controller@delete');

});