<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfile(){

        $user = users::where('id', Auth::user()->id)->first();
        return view('userProfile', compact('user'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function editProfile($id){

        $data = users::findOrFail($id);
        return view('editUserProfile', compact('data'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function updateProfile(Request $request,$id){

        $data = users::findOrFail($id);
        $dt = [
            'username' => $request['username'],
            'name' => $request['name'],
            'email' => $request['email'],
        ];

        $data->update($dt);
        return redirect('/userProfile')->with('success', 'Data Berhasil Diupdate!');
    }
}
