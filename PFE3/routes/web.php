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

Route::get('/','HomeController@index')->name('index');
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('adminlogin');
    Route::get('/login/agence', 'Auth\LoginController@showAgenceLoginForm')->name('agencelogin');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('radmin');
    Route::get('/register/agence', 'Auth\RegisterController@showAgenceRegisterForm')->name('ragence');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('');
    Route::post('/login/agence', 'Auth\LoginController@AgenceLogin')->name('');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('');
    Route::post('/register/agence', 'Auth\RegisterController@createAgence')->name('');

    Route::view('/home', 'home')->middleware('auth');
    Route::view('/admin', 'admin');
    Route::view('/agence', 'espaceagence.espaceagence');

Auth::routes();
