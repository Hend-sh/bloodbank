<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\donors;
class donorsController extends Controller
{
    //
    public function show()
    {
        return view('pages.Donor'); 
    }
    public function list()
    {
        $listDonors = donors::all();
    }
}
