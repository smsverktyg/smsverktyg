<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
$router->get('/', 'WelcomeController@index');


/*
|--------------------------------------------------------------------------
| /install Routes
|--------------------------------------------------------------------------
|
| ...
|
*/
$router->group(['prefix' => 'install'], function($router){
    $router->get('/', 'InstallController@index');
});


/*
|--------------------------------------------------------------------------
| /auth Routes
|--------------------------------------------------------------------------
|
| ...
|
*/
$router->group(['prefix' => '/auth'], function($router){
    $router->get('/login', 'Auth\LoginController@form');
    $router->post('/login', 'Auth\LoginController@post');
});