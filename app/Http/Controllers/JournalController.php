<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JournalController extends Controller
{
    public function index(){
       
        return view('/Journal/listJournal')->with([
            'user' => Auth::user(),
        ]);
    }
}
