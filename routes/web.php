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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'backend'], function() {
    Route::get('/', 'BackendController@index');
    Route::group(['prefix' => 'category'], function() {
        Route::get('/', 'CategoryController@index');
    });
});