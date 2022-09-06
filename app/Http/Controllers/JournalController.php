<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JournalController extends Controller
{
    public function listJournal(){
       
        return view('Journal.listJournal')->with([
            'user' => Auth::user(),
        ]);
    }
    public function uploadJournal(){
       
        return view('Journal.uploadJournal')->with([
            'user' => Auth::user(),
        ]);
    }
   
}
