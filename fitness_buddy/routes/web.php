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

Route::get('/','HomeController@welcome');
Route::get('/register','HomeController@register');
Route::get('/addMeals','HomeController@addMeals');
Route::get('/displayMeals','HomeController@displayMeals');

Route::resource('posts', 'FoodsController');