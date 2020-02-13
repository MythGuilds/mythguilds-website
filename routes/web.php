<?php

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


// Direct View
$router->get('/', function () {
    return view('home');
});

$router->get('/about', function () {
    return view ("about");
});

$router->get('/rules', function () {
    return view ("rules");
});

// Controllers Under /app/Http/Controllers/

$router->get('/test', "TestController@leximethod");

$router->post('/api/signup', "UserController@signup");