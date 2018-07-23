<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'home']);

Route::get('/actions', ['uses' =>'ActionsController@index']);

Route::get('/actions/{type}', ['uses' =>'ActionsController@displayType']);

Route::get('/action/{action}', ['uses' =>'ActionsController@show']);

