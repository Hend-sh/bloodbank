<?php



//Auth::routes();
route::get('/contact',function () {
    return view('bloodbank.Contact');
});


//Route::get('/', 'HomeController@show')->name('home');
Route::post('/Cstore', 'ContactusController@store')->name('contactus-store');
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


Route::get('/users','userController@show');
Route::post('/users','userController@store');
Route::get('/users/{id}','userController@delete');


Route::get('/','HomeController@show');
Auth::routes();
Route::get('/index', 'HomeController@show')->name('index');


Route::get('/vbloodbank','Vbloodbank@show');
// Route::get('/bloodbank','Vbloodbank@store');
?>
