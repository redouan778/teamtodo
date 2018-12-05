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


Route::get('/', 'RouteController@login');
Route::get('/dashboard', 'RouteController@dashboard');

//User
Route::get('/profiel/{id}', 'RouteController@profile');
Route::get('/instellingen', 'RouteController@settings');

//Auth
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
