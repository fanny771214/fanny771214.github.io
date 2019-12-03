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
Route::get('/about', 'Frontcontroller@about');
Route::get('/news', 'Frontcontroller@news');
Route::get('/product', 'Frontcontroller@product');
Route::get('/contact_us', 'Frontcontroller@contact_us');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
