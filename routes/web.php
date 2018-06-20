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
    return view('welcome');
});

Route::get('/annonces', function () {
    return view('annonces');
});

Route::get('/annonce', function () {
    return view('annonce');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
