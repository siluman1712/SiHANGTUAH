<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\pebin;
use App\Models\pbi;
use App\Models\wilayah;
use App\Models\kpknl;
use App\Models\dbsatker;


class SatkerController extends Controller
{
    
    public function index() {
        $dbsatker = dbsatker::all();
        return view('dbsatker.satker', compact('dbsatker'));
    }

    public function sukses(){
    Session::flash('sukses','Ini notifikasi SUKSES');
    return redirect('satker');
    }
 
    public function peringatan(){
        Session::flash('peringatan','Ini notifikasi PERINGATAN');
        return redirect('satker');
    }
 
    public function gagal(){
        Session::flash('gagal','Ini notifikasi GAGAL');
        return redirect('satker');
    }

    public function tambahsatker() {
        $pebin = pebin::all();
        $wilayah = wilayah::all();
        $kpknl = kpknl::all();
        return view('dbsatker.tambahsatker',compact('pebin', 'wilayah','kpknl'));
    }

    public function getPbi(Request $request){
        $pbi = pbi::where("kd_pebin",$request->pebinKd)->pluck('kd_pbi','ur_pbi');
        return response()->json($pbi);
    }

    public function insertsatker(Request $request)
    {
        return view('tambahsatker.create');
    }

    public function store(Request $request)
    {
        $dbsatker = $request->all();
        $dbsatker = new dbsatker;
        $dbsatker->pebin = $request->input('pebin');
        $dbsatker->pbi = $request->input('pbi');
        $dbsatker->wilayah = $request->input('wilayah');
        $dbsatker->ukpb = $request->input('ukpb');
        $dbsatker->upkpb = $request->input('upkpb');
        $dbsatker->jk = $request->input('jk');
        $dbsatker->kdukpb = $dbsatker->pebin . $dbsatker->pbi . $dbsatker->wilayah . $dbsatker->ukpb. $dbsatker->upkpb .$dbsatker->jk;
        $dbsatker->nmukpb = $request->input('nmukpb');
        $dbsatker->nmpb = $request->input('nmpb');
        $dbsatker->kpknl = $request->input('kpknl');
        $dbsatker->save();
        return redirect()->route('satker')->with('sukses','Data Berhasil ditambahkan!');
    }

    public function tampilkandata($id){
        $data = dbsatker::find($id);
        $pebin = pebin::all();
        $wilayah = wilayah::all();
        $kpknl = kpknl::all();
        //dd($data);
        return view('dbsatker.updatesatker', compact('data','pebin', 'wilayah','kpknl'));
    }

    public function updatesatker(Request $request){
        //$data = dbsatker::find($id);
        //$data->update($request->all());
        DB::table('dbsatkers')->where('id',$request->id)->update([
            'pebin' => $request->pebin,
            'pbi' => $request->pbi,
            'wilayah' => $request->wilayah,
            'ukpb' => $request->ukpb,
            'upkpb' => $request->upkpb,
            'jk' => $request->jk,
            'kdukpb' => $request->pebin.$request->pbi.$request->wilayah.$request->ukpb.$request->upkpb.$request->jk,
            'nmukpb' => $request->nmukpb,
            'nmpb' => $request->nmpb,
            'kpknl' => $request->kpknl
            ]);

        return redirect()->route('satker')->with('sukses','Data Berhasil diupdate!');
    }

    public function deletedata($id){
        $data = dbsatker::find($id);
        $data->delete();
        return redirect()->route('satker')->with('sukses','Data Berhasil dihapus!');
    }



}
