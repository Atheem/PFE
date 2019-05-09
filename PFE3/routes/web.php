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

// frontend
Route::get('/','HomeController@index')->name('index');
Route::get('/Reservation/{id}','ReservationController@details')->name('details');
Route::post('/Reservation','ReservationController@store')->name('store');
Route::get('/Cataloge', 'CatalogeController@cataloge')->name('cataloge');
Route::post('/Contact','ContactController@store')->name('contact');




//espaceagence
Route::get('/espace-agence','HomeController@espaceagence')->name('espaceagence');
Route::put('/Agence/Profile','VoitureController@Update')->name('updatep');
Route::put('/Agence/Profile/pass','VoitureController@updatepassa')->name('updatepassa');
Route::get('/Agence/Gestion-Voitures','VoitureController@viewall')->name('gestvoiture');
Route::get('/Agence/Profile','VoitureController@profile')->name('profilea');
Route::get('/Agence/Reservation','VoitureController@reservation')->name('reserv');
Route::get('/Agence/Reclamation','ReclamationController@viewrec')->name('viewrec');
Route::put('/Agence/Reclamation/{id}','ReclamationController@updatestatus')->name('updatestatus');
Route::get('/Agence/Gestion-Voitures/New','VoitureController@createcar')->name('createcar');
Route::post('/Agence/Gestion-Voitures','VoitureController@storecar')->name('storev');
Route::delete('/Agence/Gestion-Voitures/{id}','VoitureController@destroy');
Route::get('/Agence/Gestion-Voitures/{id}/edit','VoitureController@editv');
Route::put('/Agence/Gestion-Voitures/{id}','VoitureController@updatev');
Route::put('/Agence/Gestion-Voitures/Photo/{id}','VoitureController@updateim');
Route::put('/Agence/Reservation/{id}','VoitureController@editaction');






//CILENT

    Route::get('/Client', 'ClientController@index')->name('espaceclient');
    Route::get('/Client/Profile', 'ClientController@profile')->name('profileclient');
     Route::put('/Client/Profile','ClientController@update')->name('updatec');
     Route::put('/Client/Profile/pass','ClientController@updatepass')->name('updatepass');
     Route::get('/Client/Reclamations','ReclamationController@listreclam')->name('listreclam');
     Route::get('/Client/Reclamations/add','ReclamationController@ajoutrec')->name('ajoutrec');
     Route::post('/Client/Reclamations/','ReclamationController@reccreate')->name('reccreate');
     Route::delete('/Client/Reclamations/{id}','ReclamationController@destroy');
     Route::get('/Client/Reclamations/{id}/edit','ReclamationController@editreclam');
     Route::put('/Client/Reclamations/{id}','ReclamationController@updatereclam');
     Route::get('/Client/Reservations','ClientController@listreserv')->name('listreserv');








//auth route
Auth::routes();
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

