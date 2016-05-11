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


// Authentication Routes...
Route::group(['prefix' => 'admin'], function(){
    Route::get('login', 'AuthController@showLoginForm');
    Route::post('login', 'AuthController@login');
    Route::get('logout', 'AuthController@logout');

    Route::get('/', 'AdminController@index');
});

Route::get('api/v1/docs/{page?}', 'HomeController@doc');

Route::get('new', 'FuckController@create');
Route::post('new', 'FuckController@store');

Route::group(['middleware' => 'token'], function(){
    Route::get('{fuck}/confirm', 'FuckController@confirm');
    Route::get('{fuck}/edit', 'FuckController@edit');
    Route::post('{fuck}/edit', 'FuckController@update');
    Route::get('{fuck}/delete', 'FuckController@delete');
    Route::post('{fuck}/delete', 'FuckController@trash');
});

Route::get('{fuck}/token', 'FuckController@token');
Route::get('{fuck}', 'FuckController@show');

Route::get('/', 'HomeController@index');
