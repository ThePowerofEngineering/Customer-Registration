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

Route::get('/', 'IndexController@index')->name('home');
Route::post('/register', 'RegisterController@register')->name('postRegistration');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/homepage', 'IndexController@index')->name('home');
