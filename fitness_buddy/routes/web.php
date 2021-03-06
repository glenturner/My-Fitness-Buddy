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

Route::get('/','FoodsController@index');
Route::get('/create','FoodsController@create');
Route::get('/show','FoodsController@show');


Route::resource('posts', 'FoodsController');
Auth::routes();


Route::get('/dashboard', 'DashboardController@index');