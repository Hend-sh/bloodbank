<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\patient;
use App\BloodType;
class patientContoller extends Controller
{
    //
    public function index()
    {
        $cities = City::all ();
        $BloodType = BloodType::all();
      return view('paitent')->with('cities',$cities)->with('BloodType',$BloodType);
    }

    public function show()
    {
        $patient = patient :: with('City')->get();        
           return view('ShowPaitent')->with([
              'patient' => $patient,
           ]);
    }

    public function store(){

        request()->validate([
       'phone_number' => 'required',
       'address' => 'required',
         'cites' => 'required',
         'blood_type' => 'required',
         'type' => 'required',
         ]);

         $patient = new patient;
         $patient->phone_number = request('phone_number');
         $patient->address = request('address');
         $patient->city_id = request('cites');
         $patient->blood_type = request('blood_type');
         $patient->type = request('type');         
         $patient->save();
     
         $patient = patient::with('City')->get();
         return view('ShowPaitent')->with([
             'patient' =>  $patient,
         ]);
     //return back();
     
     }
 
}
