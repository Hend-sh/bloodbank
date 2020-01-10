<?php



<<<<<<< HEAD
Auth::routes();
Route::get('/contact',function () {
=======
//Auth::routes();
route::get('/contact',function () {
>>>>>>> c45bb3c518e3c033f01d2d8d7123370e16f00867
    return view('bloodbank.Contact');
});


//Route::get('/', 'HomeController@show')->name('home');
Route::post('/Cstore', 'ContactusController@store')->name('contactus-store');
<<<<<<< HEAD
Route::get('/donor','donorsController@show');
Route::get('/donors', 'DonorController@index');
Route::get('/donors/create','DonorController@create');
Route::get('/donors/{id}','DonorController@show');
Route::post('/donors','DonorController@store');
=======
Route::get('/donor','DonorController@show');
Route::get('/donors', 'DonorController@show');
Route::get('/donors/create','DonorController@create');
Route::get('/donors/{id}','DonorController@show');
Route::post('/donors','DonorController@store');


// Route::any('/search',search(){
//     $inp=Input::get('inp');
//     $donor=Ddonor::where('name','LIKE','%','$inp','%')->orwhere('age','LIKE','%','$inp','%')
//     ->orwhere('bloodtype','LIKE','%','$inp','%')->orwhere('phone_number','LIKE','%','$inp','%')
//     ->orwhere('city','LIKE','%','$inp','%')->orwhere('email','LIKE','%','$inp','%')->get();
//     if(count($donor)>0)
//         return view('bloodbank.search')->withdetails($donor)->withQuery($inp);
//         else return view('bloodbank.search')->withMessage('No Details Found');
    
// });

>>>>>>> c45bb3c518e3c033f01d2d8d7123370e16f00867

Route::get('/users','userController@show')->middleware('auth');
Route::post('/users','userController@store')->middleware('auth');
Route::get('/users/{id}','userController@delete')->middleware('auth');



//Route::get('/','HomeController@show');
Auth::routes();
<<<<<<< HEAD
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vbloodbank','Vbloodbank@show');
//Route::get('/contact','contact@show');
=======
Route::get('/index', 'HomeController@show')->name('index');


Route::get('/vbloodbank','Vbloodbank@show');
// Route::get('/bloodbank','Vbloodbank@store');
>>>>>>> c45bb3c518e3c033f01d2d8d7123370e16f00867
?>
