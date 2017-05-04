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

$app->get('/links/{link}', ['uses' => 'LinkController@show']);

// Api
$app->group(['namespace' => 'Api', 'prefix' => 'api'], function () use ($app) {
    // version 1
    $app->group(['namespace' => 'V1', 'prefix' => 'v1'], function () use ($app) {
        $app->get('/links', ['uses' => 'LinkController@index']);
        $app->post('/links', ['uses' => 'LinkController@store']);
        $app->get('/links/{id}', ['uses' => 'LinkController@show']);
        $app->put('/links/{id}', ['uses' => 'LinkController@update']);
        $app->delete('/links/{id}', ['uses' => 'LinkController@destroy']);
    });
});
