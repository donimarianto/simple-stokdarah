<?php

namespace App\Http\Controllers;

use App\Models\DonorModel;
use App\Models\DarahModel;
use App\Models\PegawaiModel;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function FormInputDonor(){
        $data['pegawai']=PegawaiModel::all();
        return view('input_donor',$data);
    }

    public function saveDonor(Request $request){
        $data=new DonorModel();
        $data->nama_pendonor=$request->nama_pendonor;
        $data->nama_pegawai=$request->nama_pegawai;
        $data->alamat=$request->alamat;
        $data->telepon=$request->telepon;
        $data->email=$request->email;
        $data->golongan_darah=$request->golongan_darah;
        $data->tanggal_lahir=$request->tanggal_lahir;
        $data->jenis_kelamin=$request->jenis_kelamin;
        $data->tanggal_donasi=$request->tanggal_donasi;
        $data->save();

        $golongan_darah = $request->golongan_darah;
        $stokDarah = DarahModel::first();

        if (!$stokDarah) {
            $stokDarah = new DarahModel();
            $stokDarah->A = 0;
            $stokDarah->B = 0;
            $stokDarah->AB = 0;
            $stokDarah->O = 0;
        }

        switch ($golongan_darah) {
            case 'A':
                $stokDarah->A += 1;
                break;
            case 'B':
                $stokDarah->B += 1;
                break;
            case 'AB':
                $stokDarah->AB += 1;
                break;
            case 'O':
                $stokDarah->O += 1;
                break;
        }

        $stokDarah->save();
        return redirect()->route('viewDataDonor');
    }

    public function viewDataDonor(){
        $data['donor']=DonorModel::all();
        return view('viewDonor',$data);
    }

    public function editForm($id){
        $donor=DonorModel::findOrFail($id);
        $pegawai=PegawaiModel::all();
        return view('editDonor',compact('donor'))
        ->with('donor',$donor)
        ->with('pegawai',$pegawai);
    }

    public function upDonor(request $request, $id){
        $donor=DonorModel::findOrFail($id);
        $stokDarah = DarahModel::first();
        
        if (!$stokDarah) {
            $stokDarah = new DarahModel();
            $stokDarah->A = 0;
            $stokDarah->B = 0;
            $stokDarah->AB = 0;
            $stokDarah->O = 0;
        }
        
        if ($donor->golongan_darah != $request->golongan_darah) {
            switch ($donor->golongan_darah) {
                case 'A':
                    if ($stokDarah->A > 0) {
                        $stokDarah->A -= 1;
                    }
                    break;
                case 'B':
                    if ($stokDarah->B > 0) {
                        $stokDarah->B -= 1;
                    }
                    break;
                case 'AB':
                    if ($stokDarah->AB > 0) {
                        $stokDarah->AB -= 1;
                    }
                    break;
                case 'O':
                    if ($stokDarah->O > 0) {
                        $stokDarah->O -= 1;
                    }
                    break;
            }
        }
        
        $donor->nama_pendonor = $request->nama_pendonor;
        $donor->nama_pegawai = $request->nama_pegawai;
        $donor->alamat = $request->alamat;
        $donor->telepon = $request->telepon;
        $donor->email = $request->email;
        $donor->golongan_darah = $request->golongan_darah;
        $donor->tanggal_lahir = $request->tanggal_lahir;
        $donor->jenis_kelamin = $request->jenis_kelamin;
        $donor->tanggal_donasi = $request->tanggal_donasi;
        $donor->save();
        
        $golongan_darah = $request->golongan_darah;
        switch ($golongan_darah) {
            case 'A':
                $stokDarah->A += 1;
                break;
            case 'B':
                $stokDarah->B += 1;
                break;
            case 'AB':
                $stokDarah->AB += 1;
                break;
            case 'O':
                $stokDarah->O += 1;
                break;
        }
        
        $stokDarah->save();
        return redirect()->route('viewDataDonor');
    }
    

    public function hapus($id){
        $donor=DonorModel::findOrFail($id);
        $donor->delete();
        return redirect()->route('viewDataDonor');
    }
}
