<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\KonfigTanggal;


class KonfigTglController extends Controller
{
    public function index()
    {
        $data = KonfigTanggal::all();
        return view('konfigtanggal.konfigurasi_tanggal', compact('data'));
    }

    public function tampildata($id)
    {
        $data = KonfigTanggal::find($id);
        //dd($data);
        return view('konfigtanggal.updatetgl', compact('data'));
    }

    public function updatetgl(Request $request){
        //$data = dbsatker::find($id);
        //$data->update($request->all());
        DB::table('konfig_tanggals')->where('id',$request->id)->update([
            'tglAwal' => $request->tglAwal,
            'tglAkhir' => $request->tglAkhir,
            'tahun_anggaran' => $request->tahun_anggaran,
            ]);

        return redirect()->route('tampil_konfigtgl')->with('sukses','Data Berhasil diupdate!');
    }


}

