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

$router->get('/hai/{name}', function ($name) use ($router) {
    return "<h1>Kaktus</h1><p>Hai " . $name . ", Salam kenal</p>";
});


$router->get("/belajarMiddleware/{age}", ['middleware' => 'checkage', function ($age) {
    return "Your age is " . $age;
}]);

$router->get('user', 'UserController@index');

$router->get('user/tampil', 'UserController@getIndexViews');

$router->get("posts", "PostController@index");

$router->post("posts/insert", "PostController@store");

$router->post("posts/update", "PostController@update");

$router->post("posts/{id}", "PostController@destroy");