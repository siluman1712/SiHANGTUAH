<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Ruangan;
use App\Models\KategoriRuangan;
use App\Models\dbgedung;
use App\Models\dblantai;
use App\Models\dbuniteselon;
use App\Models\KonfigTanggal;
use App\Models\dbsatker;

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

    public function tambahruang()
    {
        $ta = KonfigTanggal::all(); 
        $satker = dbsatker::all();
        $eselon = dbuniteselon::all();
        $kategori = KategoriRuangan::all();
        $unit = Ruangan::all();
        $nomor=Ruangan::count();
        if($nomor == 000){
            $urut = 001;
            $next = $urut;
            //dd($next);
        }else{
            $ambil = Ruangan::all()->last();
            $urut = (int)substr($ambil->urutruangan,-3) + 1;
            $next = $urut;
        }
        return view('dataruangan.tambahruang', compact('ta', 'satker', 'eselon', 'kategori', 'unit', 'next'));
    }

    public function getLantai(Request $request)
    {
        $lantai = dblantai::where("gedung",$request->gedungID)->pluck('ltgedung','uraianlantai');
        return response()->json($lantai);
    }

    public function getNIP(Request $request)
    {
        $lantai = Pegawai::where("nip",$request->gedungID)->pluck('ltgedung','uraianlantai');
        return response()->json($lantai);
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
