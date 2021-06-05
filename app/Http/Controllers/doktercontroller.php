<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\DB;


use App\Models\dokter152;
use App\Models\kamar152;
use App\Models\pasien152;
use App\Models\User;

class doktercontroller extends Controller
{
    public function index(){
        $pasien = pasien152::all();
        return view('pasien152',[
            'pasien' => $pasien
        ]);
    }

    public function search($key){
        $kamar = kamar152::where('');
        return view('kamar152',[
            'kamar' => $kamar
        ]);
        }
    public function tambah(){
        $kamar = kamar152::all();
        $pasien = pasien152::all();
        return view('tambah-dokter152',[
            'kamar' => $kamar,
            'pasien' => $pasien
        ]);
    }
    public function edit ($id){
        $kamar = kamar152::all();
        $pasien = pasien152::all();
        $dokter = dokter152::all();
        return view('edit-dokter152',[
            'dokter' => $dokter,
            'kamar' => $kamar,
            'pasien' => $pasien
        ]);
    }

    public function update(Request $request, $id){
        Transaksi::where('id',$id)->update([
            'id_pasien'=>$request->id_pasien,
            'id_kamar'=>$request->id_kamar

        ]);
    }

    public function destroy($id){
        $dokter = dokter152::where('id',$id)->first();
        $dokter->delete();
        return redirect()->route('');
    }   
}
