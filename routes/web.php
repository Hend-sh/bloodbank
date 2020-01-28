<?php

use App\User;
use App\City;
use App\donors;
// use Request;


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
//Route::get('/donors', 'DonorController@index');
Route::get('/donors/create','DonorController@create');
Route::get('/donor/show','DonorController@show');
Route::get('/donors/{id}','DonorController@show');
Route::post('/donors','DonorController@store');

Route::get('/users','userController@show');
Route::post('/users','userController@store');
Route::get('/users/{id}','userController@delete');

Route::get('/bloodgroup','BloodgroupController@index');
Route::post('/bloodgroup','BloodgroupController@store')->name('bloodgroup-store');

//routes for redirect according to the type of user 
route::get('/donorspage','DonorController@LoginPage');
route::get('/bloodbankpage','DonorController@LoginPagee');


//Route::get('/','HomeController@show');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vbloodbank','Vbloodbank@show');
//Route::get('/contact','contact@show');
Route::get('/index', 'HomeController@show')->name('index');

route::get('/patient/show','patientContoller@show');
Route::post('/Pstore', 'patientContoller@store')->name('reg-patinet-store');
Route::get('/patient','patientContoller@index');


Route::get('/vbloodbank','Vbloodbank@show');
// Route::get('/bloodbank','Vbloodbank@store');


// Route::any ( '/search', function () {

//     $users = User::with('donors','donors.City')->get();
    
    
//     $q = Request::get ( 'q' );
//     $userr = User::with('donors')->where( 'BloodKind', 'LIKE', '%' . $q . '%' )->get();
//     dd($userr);
//     if (count ( $userr ) > 0)
//         return view ( 'pages.showDonors' )->withDetails ( $userr )->withQuery ( $q )->with('users',$users);
//     else
//         return view ( 'pages.showDonors' )->withMessage ( 'No Details found. Try to search again !' )->with('users',$users);
        

// } );

?>
