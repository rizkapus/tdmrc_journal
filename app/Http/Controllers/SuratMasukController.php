<?php

namespace App\Http\Controllers;

use App\Models\uploadsuratmasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratMasukController extends Controller
{
    public function listSurat(){
       
        $dataSurat = uploadsuratmasuk::latest()->get();
        return view('SuratMasuk.listSuratMasuk',compact('dataSurat'))->with([
            'user' => Auth::user(),
        ]);
    }
    public function uploadSurat(){
       
        return view('SuratMasuk.uploadSuratMasuk')->with([
            'user' => Auth::user(),
        ]);
    }   

    public function postSurat(Request $request){
        $nm = $request->file;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

            $dtUpload = new uploadsuratmasuk;
            $dtUpload->no_surat = $request->no_surat;
            $dtUpload->pengirim = $request->pengirim;
            $dtUpload->tanggal_surat = $request->tanggal_surat;
            $dtUpload->pengolah = $request->pengolah;
            $dtUpload->disposisi = $request->disposisi;
            $dtUpload->verified = $request->verified;
            $dtUpload->file = $namaFile;


            $nm->move(public_path().'/files/suratmasuk',$namaFile);
            $dtUpload->save();

            return redirect('listSuratMasuk');
    }

    public function editSurat($id){

        $dt = uploadsuratmasuk::findorfail($id);
        return view('SuratMasuk.editSuratMasuk', compact('dt'))->with([
            'user' => Auth::user(),
        ]);

    }

    public function updateSurat (Request $request, $id){

        $ubah = uploadsuratmasuk::findorfail($id);
        $awal = $ubah->file;

        $dt = [
            'no_surat' => $request['no_surat'],
            'pengirim' => $request['pengirim'],       
            'tanggal_surat' => $request['tanggal_surat'],                      
            'pengolah' => $request['pengolah'],            
            'disposisi' => $request['disposisi'],            
            'verified' => $request['verified'],            
            'file' => $awal,
        ];

        $request->file->move(public_path().('/files/suratmasuk'),$awal);
        $ubah->update($dt);
        return redirect('/listSuratMasuk');

    }
    
    public function deleteSurat($id){
        $hapus = uploadsuratmasuk::findorfail($id);
        
        $file = public_path('/files/suratmasuk/').$hapus->file;
        if(file_exists($file)){
            @unlink($file);
        }

        $hapus->delete();
        return back();
    }
    
}