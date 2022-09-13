<?php

namespace App\Http\Controllers;

use App\Models\uploadjournal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JournalController extends Controller
{
    public function listJournal(){
       
        $dataJournal = uploadjournal::latest()->get() ;
        return view('Journal.listJournal', compact('dataJournal'))->with([
            'user' => Auth::user(),
        ]);
    }
    public function uploadJournal(){
       
        return view('Journal.uploadJournal')->with([
            'user' => Auth::user(),
        ]);
    }

    public function postJournal(Request $request){
        $nm = $request->file;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

            $dtUpload = new uploadjournal;
            $dtUpload->nama = $request->nama;
            $dtUpload->author = $request->author;
            $dtUpload->file = $namaFile;
            $dtUpload->tanggal_terbit = $request->tanggal_terbit;

            $nm->move(public_path().'/files/journal',$namaFile);
            $dtUpload->save();

            return redirect('listJournal');
    }
   
}
