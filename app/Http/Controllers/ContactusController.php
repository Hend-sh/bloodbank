<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactus;

class ContactusController extends Controller
{

    public function store(){
       request()->validate([
      'name' => 'required',
      'email' => 'required',
        'message' => 'required',

        ]);
        $Contact = new Contactus;
        $Contact->name = request('name');
        $Contact->email = request('email');
        $Contact->message = request('message');
        $Contact->save();
    
    return back();
    
    }

    
}
