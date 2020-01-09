<?php

namespace App\Http\Controllers;
use App\Contactteam;

use Illuminate\Http\Request;

class Contactus extends Controller
{
    //
    public function store()
    {
        dd("yes");
        //return "thanks, your donate has been added";
        
        $Contact = new Contactteam;
        $Contact->name = request('name');
        $Contact->email = request('email');
        $Contact->message = request('message');
        $Contact->save();
        
    }
}
