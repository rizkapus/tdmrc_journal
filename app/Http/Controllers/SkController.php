<?php

namespace App\Http\Controllers;

use App\Models\uploadsk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkController extends Controller
{
    public function listSk(){
       
        $dataSk = uploadsk::latest()->get();
        return view('Sk.listSk', compact('dataSk'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function uploadSk(){
       
        return view('Sk.uploadSk')->with([
            'user' => Auth::user(),
        ]);
    }

    public function postSk(Request $request){

        $nm = $request->file;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

            $dtUpload = new uploadsk;
            $dtUpload->nama = $request->nama;
            $dtUpload->jenis_sk = $request->jenis_sk;
            $dtUpload->file = $namaFile;
            $dtUpload->tanggal_terbit = $request->tanggal_terbit;

            $nm->move(public_path().'/files/sk',$namaFile);
            $dtUpload->save();

            return redirect('listSk')->with('success', 'Data Berhasil Ditambah!');
    }
    
    public function editSk($id){

        $dt = uploadsk::findorfail($id);
        return view('Sk.editSk', compact('dt'))->with([
            'user' => Auth::user(),
        ]);
    }

    public function updateSk(Request $request, $id){

        $ubah = uploadsk::findorfail($id);
        $awal = $ubah->file;

        $dt = [
            'nama' => $request['nama'],
            'jenis_sk' => $request['jenis_sk'],
            'tanggal_terbit' => $request['tanggal_terbit'],            
            'file' => $awal,
        ];

        if ($request->file('file')) {
            $request->file->move(public_path().('/files/sk'),$awal);
        }  
       
        $ubah->update($dt);
        return redirect('/listSk')->with('success', 'Data Berhasil Diupdate!');
    }

    public function deleteSk($id){

        $hapus = uploadsk::findorfail($id);
        
        $file = public_path('/files/sk/').$hapus->file;
        if(file_exists($file)){
            @unlink($file);
        }

        $hapus->delete();
        return back()->with('success', 'Data Berhasil Dihapus!');
    }
    
}
