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


Auth::routes();
route::get('/contact',function () {
    return view('Contact');
});
Route::get('/', 'HomeController@index')->name('home');
Route::post('/Cstore', 'ContactusController@store')->name('contactus-store');
Route::get('/donor','donorsController@show');
