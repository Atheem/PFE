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
Route::get('/espace-agence','HomeController@espaceagence')->name('espaceagence');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('adminlogin');
    Route::get('/login/agence', 'Auth\LoginController@showAgenceLoginForm')->name('agencelogin');
    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('radmin');
    Route::get('/register/agence', 'Auth\RegisterController@showAgenceRegisterForm')->name('ragence');

    Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('');
    Route::post('/login/agence', 'Auth\LoginController@AgenceLogin')->name('');
    Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('');
    Route::post('/register/agence', 'Auth\RegisterController@createAgence')->name('');

    Route::view('/index', 'frontend.index')->middleware('auth');
    Route::view('/home','frontend.index');
    Route::view('/admin', 'admin');
    Route::view('/agence', 'espaceagence.dashboard')->name('agence');



    Route::put('/agence/Profile','VoitureController@Update')->name('updatep');
    Route::put('/agence/Profile/pass','VoitureController@updatepassa')->name('updatepassa');
    Route::get('/agence/Gestion-Voitures','VoitureController@viewall')->name('gestvoiture');

    Route::get('/agence/Profile','VoitureController@profile')->name('profilea');
    Route::get('/agence/Reservation','VoitureController@reservation')->name('reserv');
    Route::get('/agence/Reclamation','ReclamationController@viewrec')->name('viewrec');

    Route::put('/agence/Reclamation/{id}','ReclamationController@updatestatus')->name('updatestatus');


    Route::get('/agence/Gestion-Voitures/New','VoitureController@createcar')->name('createcar');
    Route::post('/agence/Gestion-Voitures','VoitureController@storecar')->name('storev');
    Route::delete('/agence/Gestion-Voitures/{id}','VoitureController@destroy');
    Route::get('/agence/Gestion-Voitures/{id}/edit','VoitureController@editv');

    Route::put('/agence/Gestion-Voitures/{id}','VoitureController@updatev');
    Route::get('/cataloge', 'CatalogeController@cataloge')->name('cataloge');



    Route::get('/Client', 'ClientController@index')->name('espaceclient');
    Route::get('/Client/Profile', 'ClientController@profile')->name('profileclient');
     Route::put('/Client/Profile','ClientController@update')->name('updatec');
     Route::put('/Client/Profile/pass','ClientController@updatepass')->name('updatepass');
     Route::get('/Client/Reservations','ClientController@listreserv')->name('listreserv');
     Route::get('/Client/Reclamations','ReclamationController@listreclam')->name('listreclam');
     Route::get('/Client/Reclamations/add','ReclamationController@ajoutrec')->name('ajoutrec');
     Route::post('/Client/Reclamations/','ReclamationController@reccreate')->name('reccreate');
     Route::delete('/Client/Reclamations/{id}','ReclamationController@destroy');
     Route::get('/Client/Reclamations/{id}/edit','ReclamationController@editreclam');
     Route::put('/Client/Reclamations/{id}','ReclamationController@updatereclam');


     Route::get('/Reservation/{id}','ReservationController@details')->name('details');
     Route::post('/Reservation','ReservationController@store')->name('store');


Auth::routes();


