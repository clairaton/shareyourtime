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

/*---------------------------------------------------------------------
                                Actions
---------------------------------------------------------------------*/

/*
* Display Homepage
*/
Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'home']);

/*
* Display all available actions
*/
Route::get('/actions', ['uses' =>'ActionsController@index', 'as' => 'actions']);

/*
* Display all available actions for a defined Type
*/
Route::get('/actions/{type}', ['uses' =>'ActionsController@displayType', 'as' => 'catAction'])->where('type','[a-z]+');

/*
* Display a choosen action
*/
Route::get('/actions/{type}/{action}', ['uses' =>'ActionsController@show', 'as' => 'singleAction'])->where('type','[a-z]+');

/*
* Display actions after submitting the action search form
*/
Route::post('/actions', ['uses' => 'ActionsController@list', 'as' => 'actionList']);

/*
* Display the action submitting form
*/
Route::get('/action/create',['uses'=>'ActionsController@create']);

/*
* Display all available actions
*/
Route::post('/action/create',['uses'=>'ActionsController@store']);


