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

Route::get('/', 'UserController@show');
Route::get('create', 'UserController@create');
Route::post('create/makeNew', 'UserController@makeNew');
Route::get('user/{id}', 'UserController@edit');
Route::put('user/{user}/edit', 'UserController@editUser');
Route::delete('user/{user}/destroy', 'UserController@destroy');
Route::get('/enter', 'LogController@enter');
Route::post('/log', 'LogController@login');

Route::auth();

Route::get('/home', 'HomeController@index');
