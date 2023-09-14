<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Ruangan;
use App\Models\KategoriRuangan;
use App\Models\dbgedung;
use App\Models\dblantai;
use App\Models\dbuniteselon;


class RuanganController extends Controller
{
    public function index()
    {
        $dtruangan = Ruangan::leftjoin('dbgedung', 'dbruangan.ruanggedung', '=', 'dbgedung.gedung')
                            ->leftjoin('dbuniteselon', 'dbruangan.uniteselon', '=', 'dbuniteselon.uniteselon')
                            ->leftjoin('dbkategoriruang', 'dbkategoriruang.kodekategori', '=', 'dbruangan.kategori')
                            ->select('dbruangan.*', 'dbgedung.uraiangedung', 'dbuniteselon.uraian','dbkategoriruang.namakategori')
                            ->get();
        return view('dataruangan.ruangan', compact('dtruangan'));
    }

    public function tampilruangan($koderuangan){

        $dtruangan = Ruangan::find($koderuangan);
        //dd($data);
        return view('dataruangan.updateruangan', compact('dtruangan'));
    }

    public function updateruangan(Request $request, $koderuangan)
    {
        Ruangan::find($koderuangan)->update($request->all());
        return redirect()->route('ruangan')->with('success','Data Berhasil di Update');
    }
}
