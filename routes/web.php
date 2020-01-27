<?php

use App\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
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
Route::post('/Pstore', 'patientContoller@store')->name('reg-patinet-store');
//Route::get('/donors', 'DonorController@index');
Route::get('/donors/create','DonorController@create');
Route::get('/donor/show','DonorController@show');
Route::get('/donors/{id}','DonorController@show');
Route::post('/donors','DonorController@store');

Route::get('/users','userController@show');
Route::post('/users','userController@store');
Route::get('/users/{id}','userController@delete');

Route::get('/patient','patientContoller@index');
Route::get('/bloodgroup','BloodgroupController@index');
Route::post('/bloodgroup','BloodgroupController@store')->name('bloodgroup-store');

//routes for redirect according to the type of user 
route::get('/donorspage','DonorController@LoginPage')->middleware('auth');
route::get('/bloodbankpage','DonorController@LoginPagee');


//Route::get('/','HomeController@show');
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vbloodbank','Vbloodbank@show');
//Route::get('/contact','contact@show');
Route::get('/index', 'HomeController@show')->name('index');


Route::get('/vbloodbank','Vbloodbank@show');
// Route::get('/bloodbank','Vbloodbank@store');


Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
} );

// Route::any('/search',search(){
   
   
//     $inp=Input::get('inp');
//     $donor=donor::where('name','LIKE','%','$inp','%')->orwhere('age','LIKE','%','$inp','%')
//     ->orwhere('bloodtype','LIKE','%','$inp','%')->orwhere('phone_number','LIKE','%','$inp','%')
//     ->orwhere('city','LIKE','%','$inp','%')->orwhere('email','LIKE','%','$inp','%')->get();
//     if(count($donor)>0)
//         return view('pages.ShowDonor')->withdetails($donor)->withQuery($inp);
//         else return view('pages.ShowDonor')->withMessage('No Details Found');
    
// });
?>
