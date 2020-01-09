<?php

namespace App\Http\Controllers;

use App\Ddonor;

class DonorController extends Controller
{

    public function index()
    {
        $donors = Ddonor::all();
        
        return view('bloodbank.Donor', compact('donors'));

    }


    public function create()
    {
        
        return view('bloodbank.create');
    }
    public function store()
    {

        $donor =new Ddonor;
        $donor->name =request("name");
        $donor->age=request('age');
        $donor->bloodtype=request("bloodtype");
        $donor->city=request('city');
        $donor->phone_number=request('phone_number');
        $donor->email=request('email');
       $donor->save();

       return "thanks, your donate has been added";
    }
  
}

?>
