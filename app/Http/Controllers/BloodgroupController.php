<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloodgroup;
use App\BloodType;
class BloodgroupController extends Controller
{
    //
   
    public function index()
    {
      $BloodType = BloodType::all();
        $blgroup = Bloodgroup::all();
        
     return view('Blood_group')->with('BloodType',$BloodType)->with('blgroup',$blgroup);
     
      
    }
   
    public function store()
    {
        request()->validate([
              'bloodType' => 'required',
              'type' => 'required',              
              'Quantity' => 'required',
            // 'Expiration date' => 'required','date',
              ]);
              
              $bloodgroup = new Bloodgroup;
              $bloodgroup->bloodType = request('bloodType');
              $bloodgroup->type = request('type');
              $bloodgroup->Quantity = request('Quantity');
              $bloodgroup->Expiration_date  = request('Expiration_date');
                   
              $bloodgroup->save();

              $BloodType = BloodType::all();
              $blgroup = Bloodgroup::all();
              
           return view('Blood_group')->with('BloodType',$BloodType)->with('blgroup',$blgroup);
    
    }
}
