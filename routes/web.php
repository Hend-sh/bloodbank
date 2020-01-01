<?php



Route::get('/donors', 'DonorController@index');
Route::get('/donors/create','DonorController@create');
Route::get('/donors/{id}','DonorController@show');
Route::post('/donors','DonorController@store');



?>