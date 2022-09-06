<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userList(){
       
        return view('userList')->with([
            'user' => Auth::user(),
        ]);

    }
    public function addUser(){
       
        return view('addUser')->with([
            'user' => Auth::user(),
        ]);

    }
    
}
