<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function userList(){
       
        $data = users::with('role')->paginate();
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
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:255',
            'role_id' => 'required',
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);
 
        User::create($validatedData);
        return redirect('/addUser')->with('success', 'Data Berhasil Ditambah!');
        
    }
    
    public function delete($id){
    
      $data = users::findOrFail($id);
      $data->delete();
      

      return redirect('/userList')->with('success', 'Data Berhasil Dihapus!');
    }

    public function edit($id){
        
        $data = users::findOrFail($id);
       
        return view('editProfile', compact('data'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function update(Request $request, $id){
        $data = users::findOrFail($id);
        $data->update($request->all());
        return redirect('/userList')->with('success', 'data berhasil diupdate');
    }

}
