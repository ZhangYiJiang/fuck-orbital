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

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes...
Route::group(['prefix' => 'admin'], function(){
    Route::get('admin/login', 'Auth\AuthController@showLoginForm');
    Route::post('admin/login', 'Auth\AuthController@login');
    Route::get('logout', 'Auth\AuthController@logout');

    Route::get('/', 'AdminController@index');
});

Route::get('new', 'FuckController@create');