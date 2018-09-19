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

Route::view('/invoice','landing.invoice');
Route::view('/my','landing.my');

Route::prefix('dashboard')->namespace('Admin')->group(function (){
    Route::view('login', 'admin.login')->name('dashboard.login');
    Route::post('login', 'AuthController@auth')->name('dashboard.auth');
    Route::get('logout', 'AuthController@logout')->name('dashboard.logout');

    Route::middleware('auth.admin')->group(function(){
        Route::view('/','admin.index')->name('dashboard');

        Route::resource('karyawan', 'UserController')->except('destroy');
        Route::get('karyawan/{id}/activate', 'UserController@activate')->name('karyawan.activate');
        Route::resource('product', 'ProductController');

        Route::prefix('order')->group(function () {
            Route::get('/', 'OrderController@index')->name('order.index');
            Route::post('/{id}/updateStatus', 'OrderController@updateStatus')->name('order.updateStatus');
            Route::post('/show', 'OrderController@show')->name('order.show');
        });
    });

});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
