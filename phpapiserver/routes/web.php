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

$router->group(["prefix"=>"api"],function () use ($router){
    $router->get("users",["uses"=>"UsersController@getAllUser"]);
    $router->post("users",["uses"=>"UsersController@createUser"]);
});

$router->group(["prefix"=>"api"],function () use ($router){
    $router->get("posts",["uses"=>"PostsController@getAllPost"]);
    $router->post("posts",["uses"=>"PostsController@createPost"]);
    $router->get("posts/{id}",["uses"=>"PostsController@getPost"]);
    $router->delete("posts/{id}",["uses"=>"PostsController@deletePost"]);
    $router->put("posts/{id}",["uses"=>"PostsController@updatePost"]);


    
});
