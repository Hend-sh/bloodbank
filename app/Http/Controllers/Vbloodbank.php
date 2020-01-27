<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserBloodBank;

class Vbloodbank extends Controller
{
    //
    public function show()
    {
        $users = UserBloodBank::all();
        
        return view('pages.Vbloodbank', compact('users'));
    }
    public function store()
    {
       
     
        $user =new UserBloodBank;
        $user->blood_bank_name= "Alkadra hospital";
        $user->active=True;
        $user->city_number=2;
        $user->location="Tripoly";
        $user->user_id=5;
        $user->save();

        $users = UserBloodBank::all();
        
        return view('pages.Vbloodbank', compact('users'));
    }
}
