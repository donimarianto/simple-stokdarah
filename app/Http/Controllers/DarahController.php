<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DarahModel;

class DarahController extends Controller
{
    public function viewStok(){
        $darah=DarahModel::first();
        $data = [
            'A' => $darah->A,
            'B' => $darah->B,
            'AB' => $darah->AB,
            'O' => $darah->O,
        ];
        return view('viewStok', compact('data'));
    }
}
