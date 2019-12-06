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

Route::get('/', 'Frontcontroller@index');

Route::get('/news', 'Frontcontroller@news');
Route::get('/products', 'Frontcontroller@products');
Route::get('/products/{id}', 'Frontcontroller@products_detail');
Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
