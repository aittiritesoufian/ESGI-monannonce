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

Route::get('/', function () {
    return view('accueil');
});

Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store')->name('register');

Route::get('/annonce/{id}', 'annonceController@show')->name('annonce');
Route::get('/annonces', 'annoncesController@show')->name('annonces');

Route::post('/annonces', 'annoncesController@search');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
