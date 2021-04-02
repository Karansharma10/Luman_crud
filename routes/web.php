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
$router->get('todo',[
    'middleware' => 'test',
    'uses' => 'todo@index'
]);


$router->get('/','logincontroller@index');  

$router->post('insertlogin','logincontroller@insertlogin'); 
$router->post('logout','logincontroller@logout');
$router->get('like','webcodice@test');
$router->get('one','webcodice@demo');
$router->get('show','showdata@show');
$router->post('adduser','webcodice@insert');

$router->post('inserttodo','todo@inserttodo');
$router->post('deletetodo','todo@deletetodo');
$router->post('updatetodo','todo@updatetodo');