<?php



Auth::routes();
Route::get('/contact',function () {
    return view('Contact');
});
//Auth::routes();
route::get('/',function () {
    return view('pages.index');
});


//Route::get('/', 'HomeController@show')->name('home');
Route::post('/Cstore', 'ContactusController@store')->name('contactus-store');
Route::get('/donor','donorsController@show');
Route::get('/donors', 'DonorController@index');
Route::get('/donors/create','DonorController@create');
Route::get('/donors/{id}','DonorController@show');
Route::post('/donors','DonorController@store');

Route::get('/users','userController@show')->middleware('auth');
Route::post('/users','userController@store')->middleware('auth');
Route::get('/users/{id}','userController@delete')->middleware('auth');



//Route::get('/','HomeController@show');
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vbloodbank','Vbloodbank@show');
//Route::get('/contact','contact@show');
Route::get('/index', 'HomeController@show')->name('index');


Route::get('/vbloodbank','Vbloodbank@show');
// Route::get('/bloodbank','Vbloodbank@store');
?>
