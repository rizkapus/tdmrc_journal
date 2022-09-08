<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function userList(){
       
        $data = users::paginate();
        return view('userList',['data'=>$data])->with([
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
            'role_id' => 'required',
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);
 
        User::create($validatedData);
        return redirect('/addUser');

        
    }
    
}
