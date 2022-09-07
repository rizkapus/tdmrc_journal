<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    public function register(Request $request)
    {
        
        $validatedData = $request->validate([           
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'level' => 'required',
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);
 
        User::create($validatedData);
        return redirect('/addUser');

        
    }
    
}
