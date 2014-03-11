<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'EditorController@index');

Route::get('user', 'UserController@index');

Route::any('user/login', 'UserController@login');

Route::any('user/logout', 'UserController@logout');

Route::any('user/register', 'UserController@register');


// Route::get('user/{action}', function($action){
// 	return (new UserController)->$action();
// });

