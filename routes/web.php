<?php



Route::get('/donors', 'DonorController@index');
Route::get('/donors/create','DonorController@create');
Route::get('/donors/{id}','DonorController@show');
Route::post('/donors','DonorController@store');




Route::get('/','HomeController@show');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vbloodbank','Vbloodbank@show');
Route::get('/contact','contact@show');
?>