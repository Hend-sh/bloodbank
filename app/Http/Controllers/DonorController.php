<?php
namespace App\Http\Controllers;
use App\donors;
use App\User;
use App\City;
use App\Nationality;
use App\Http\ControllersAuth;
use DB;
class DonorController extends Controller
{
   
   public function show()
   { 
       
    $cities = City :: all();
    $users = User::with('donors','donors.City')->get();
    // dd($users);
    
       return view('pages.ShowDonors')->with([
           'users' =>  $users,
          'cities' => $cities,
       ]);
   }
   public function edit($id)
   {

    $user = User::with('donors','donors.City')->get();    

       return view('donorspage')->with('user',$user);
   }
    public function create()
    {
        $cities = City::all ();
        $nationality = Nationality::all ();
        
        return view('pages.cdonor')->with('cities',$cities)->with('nationality',$nationality);
    }
  


       public function store()
       {        
   
       request()->validate([
            'name' => 'required',
       //     'Phone' => 'required',
              'email' => 'required',
          //    'password' => 'required',
    //           'nationality_id' => 'required',
    //           'gender' => 'required',
    //           'dateBirth' => 'required',
    //           'BloodKind' => 'required',
    //           'city_id' => 'required',
    //           'Location' => 'required',
    //           'HealthStatus' => 'required',
       ]);

           $user =new User;
           
           $user->name =request('name');
           $user->Phone=request('Phone');
           $user->email=request('email');
           $user->password=bcrypt(request('password'));
           $user->prive=1;
           $user->save();
   

           $donor = new donors;
           $donor->nationality_id=request('Nationality');
           $donor->gender=request('gender');       
           $donor->dateBirth=request('dateBirth');  
           $donor->BloodKind=request('BloodKind');                      
           $donor->city_id=request('cites');                      
           $donor->Location=request('Location');                      
           $donor->Health_Status=request('Health_Status');                      
           $donor->user_id=user::max('id');
           
           $donor->save();


        $users = User::with('donors','donors.City')->get();
       return view('pages.ShowDonors')->with([
           'users' =>  $users,
       ]);
           
      
          }
   public function LoginPage()
   {
       return view ('donorspage');
   }
   public function LoginPagee()
   {
       return view ('bloodbankpage');
   }
  
   public function edit($id)
   {
       return view('donorspage',  [
           'donors' => donors::all(),
           'user' => User::find($id)
       ]);
   }

   public function update($id)
   {

       $donors = donors::find($id);

       $donors->name = request('name');
       $donors->price = request('price');
       $donors->description = request('description');
       $donors->save();

       return redirect('admin/products');
   }
      
}

?>
