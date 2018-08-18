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




Route::get('/', 'HomeController@index')->name('landing.home');
Route::get('/order', 'OrderController@index')->name('landing.order');
Route::post('/order', 'OrderController@create')->name('landing.order.create');
Route::view('/logintest','authuser.login');
Route::view('/reg','authuser.register');
Route::view('/forgot','authuser.reset');
Route::view('/dashboard','layouts.admin');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
