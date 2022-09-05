<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkController extends Controller
{
    public function index(){
       
        return view('Sk.listSk')->with([
            'user' => Auth::user(),
        ]);
    }
}
