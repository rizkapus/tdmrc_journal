<?php

namespace App\Http\Controllers;

use App\Models\uploadsuratkeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratKeluarController extends Controller
{
    public function listSurat(){
       
        $dataSurat = uploadsuratkeluar::latest()->get();
        return view('SuratKeluar.listSuratKeluar', compact('dataSurat'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function listSuratAdmin(){
       
        $dataSurat = uploadsuratkeluar::latest()->where('verified','=',1)->get();
        return view('SuratKeluar.listSuratKeluarAdmin',compact('dataSurat'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function uploadSurat(){
       
        return view('SuratKeluar.uploadSuratKeluar')->with([
            'user' => Auth::user(),
        ]);
    }

    public function postSurat(Request $request){
        $nm = $request->file;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

            $dtUpload = new uploadsuratkeluar();
            $dtUpload->no_surat = $request->no_surat;
            $dtUpload->penerima = $request->penerima;
            $dtUpload->tanggal_surat = $request->tanggal_surat;
            $dtUpload->pengolah = $request->pengolah;
            $dtUpload->disposisi = $request->disposisi;
            $dtUpload->verified = $request->verified;
            $dtUpload->file = $namaFile;


            $nm->move(public_path().'/files/suratkeluar',$namaFile);
            $dtUpload->save();

            return redirect('listSuratKeluar')->with('success', 'Data Berhasil Ditambah!');
    }

    public function editSurat($id){

        $dt = uploadsuratkeluar::findorfail($id);
        return view('SuratKeluar.editSuratKeluar', compact('dt'))->with([
            'user' => Auth::user(),
        ]);

    }

    public function updateSurat (Request $request, $id){

        $ubah = uploadsuratkeluar::findorfail($id);
        $awal = $ubah->file;

        $dt = [
            'no_surat' => $request['no_surat'],
            'penerima' => $request['penerima'],       
            'tanggal_surat' => $request['tanggal_surat'],                      
            'pengolah' => $request['pengolah'],            
            'disposisi' => $request['disposisi'],            
            'verified' => $request['verified'],            
            'file' => $awal,
        ];

       // $request->file->move(public_path().('/files/suratkeluar'),$awal);
        $ubah->update($dt);
        return redirect('/listSuratKeluar')->with('success', 'Data Berhasil Diupdate!');

    }

    public function deleteSurat($id){
        $hapus = uploadsuratkeluar::findorfail($id);
        
        $file = public_path('/files/suratkeluar/').$hapus->file;
        if(file_exists($file)){
            @unlink($file);
        }

        $hapus->delete();
        return back()->with('success', 'Data Berhasil Dihapus!');
    }
}
