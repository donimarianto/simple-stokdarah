<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Models\RsModel;
use App\Models\DarahModel;

class RsController extends Controller
{
    public function formRs(){
        return view('rsinput');
    }


public function saveRs(Request $request){
    DB::beginTransaction();
    
    try {
        $data = new RsModel();
        $data->nama = $request->nama;
        $data->jabatan = $request->jabatan;
        $data->rs = $request->rs;
        $data->golongan = $request->golongan;
        $data->jumlah = $request->jumlah;
        $data->email = $request->email;
        $data->no_tlp = $request->no_tlp;
        $data->tanggal = $request->tanggal;
        $data->alamat = $request->alamat;
        $data->save();

        $stokDarah = DarahModel::first();

        if ($stokDarah) {
            switch($request->golongan) {
                case 'A':
                    $stokDarah->A -= $request->jumlah;
                    break;
                case 'B':
                    $stokDarah->B -= $request->jumlah;
                    break;
                case 'AB':
                    $stokDarah->AB -= $request->jumlah;
                    break;
                case 'O':
                    $stokDarah->O -= $request->jumlah;
                    break;
            }

            $stokDarah->save();
            return redirect()->route('viewRs');
        }

        DB::commit();
        
    } catch (\Exception $e) {
        DB::rollback();
        throw $e;
    }
}

    public function viewRs(){
        $rs['data']=RsModel::all();
        return view('datars',$rs);
    }

    
}
