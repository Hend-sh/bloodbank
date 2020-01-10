<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vbloodbank extends Controller
{
    //
    public function show()
    {
        return view('pages.Vbloodbank');
    }
    public function list()
    {
        $listDonors = donors::all();
        return view('');
    }
}
