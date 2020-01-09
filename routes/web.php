<?php



<<<<<<< HEAD
Auth::routes();
route::get('/contact',function () {
    return view('Contact');
});
Route::get('/', 'HomeController@index')->name('home');
Route::post('/Cstore', 'ContactusController@store')->name('contactus-store');
Route::get('/donor','donorsController@show');
=======
Route::get('/donors', 'DonorController@index');
Route::get('/donors/create','DonorController@create');
Route::get('/donors/{id}','DonorController@show');
Route::post('/donors','DonorController@store');
Route::any('/search',search(){
    $inp=Input::get('inp');
    $donor=Ddonor::where('name','LIKE','%','$inp','%')->orwhere('age','LIKE','%','$inp','%')
    ->orwhere('bloodtype','LIKE','%','$inp','%')->orwhere('phone_number','LIKE','%','$inp','%')
    ->orwhere('city','LIKE','%','$inp','%')->orwhere('email','LIKE','%','$inp','%')->get();
    if(count($donor)>0)
        return view('bloodbank.search')->withdetails($donor)->withQuery($inp);
        else return view('bloodbank.search')->withMessage('No Details Found');
    
});



Route::get('/','HomeController@show');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vbloodbank','Vbloodbank@show');
Route::get('/contact','contact@show');
?>
>>>>>>> c340cf0a9ae267deb586f5bfc8531eef0e1bc41b
