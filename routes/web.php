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

Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/annonces', function () {
    return view('annonces');
});
/*
Route::get('/search/{search}', 'searchController@show')->name('search');*/

Route::get('/annonce/{id}', 'annonceController@show')->name('annonce');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
