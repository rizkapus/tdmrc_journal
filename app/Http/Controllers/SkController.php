<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkController extends Controller
{
    public function listSk(){
       
        return view('Sk.listSk')->with([
            'user' => Auth::user(),
        ]);
    }
    public function uploadSk(){
       
        return view('Sk.uploadSk')->with([
            'user' => Auth::user(),
        ]);
    }

    
}
