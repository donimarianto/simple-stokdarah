<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PegawaiModel;

class PegawaiController extends Controller
{
    public function pegawai(){
        return view('input_pegawai');

    }

    public function savePegawai(request $request){
        $data= new PegawaiModel();
        $data->nama=$request->nama;
        $data->jabatan=$request->jabatan;
        $data->telepon=$request->telepon;
        $data->email=$request->email;
        $data->alamat=$request->alamat;
        $data->save();
        return redirect()->route('viewPegawai');
    }

    public function viewPegawai(){
        $data['pegawai']= PegawaiModel::all();
        return view('viewPegawai',$data);
    }

    public function editPegawai($id){
        $pegawai=PegawaiModel::findOrFail($id);
        return view('editPegawai',compact('pegawai'));
    }

    public function editProses(Request $request, $id){
        $pegawai = PegawaiModel::findOrFail($id);
        $pegawai->nama=$request->nama;
        $pegawai->jabatan=$request->jabatan;
        $pegawai->telepon=$request->telepon;
        $pegawai->email=$request->email;
        $pegawai->alamat=$request->alamat;
        $pegawai->save();
        return redirect()->route('viewPegawai');
    }

    public function Delete($id){
        $pegawai=PegawaiModel::findOrFail($id);
        $pegawai->delete();
    }


}
