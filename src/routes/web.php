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

Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::group(['prefix' => 'tasks', 'as' => 'tasks.'], function () {
    Route::get('/', 'TaskController@index')->name('index');
    Route::get('/create', 'TaskController@create')->name('create');
    Route::post('/store', 'TaskController@store')->name('store');
    Route::get('/edit/{task}', 'TaskController@edit')->name('edit');
    Route::post('/update/{task}', 'TaskController@update')->name('update');
	Route::get('/delete/{task}', 'TaskController@destroy')->name('delete');
});