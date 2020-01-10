<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class userController extends Controller
{
    
    public function show()
    {
        $users = User::all();
        return view('pages.users')->with('users',$users);
    }

    public function store()
    {
        $user =new User;
        $user->name =request("name");
        $user->Phone=request('phone');
        $user->email=request("email");
        $user->password=request('password');
        $user->prive=2;
        $user->save();
        $users = User::all();
        return view('pages.users')->with('users',$users);
    }

    public function delete($id)
    {
        $user=new User;
        $users = User::find($id);
        $users->delete();
        return redirect()->back();
        $users = User::all();
        return view('pages.users')->with('users',$users);
    }
   
}
