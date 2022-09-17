<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratKeluarController extends Controller
{
    public function listSurat(){
       
        return view('Surat.listSurat')->with([
            'user' => Auth::user(),
        ]);
    }
    public function uploadSurat(){
       
        return view('Surat.uploadSurat')->with([
            'user' => Auth::user(),
        ]);
    }
}
