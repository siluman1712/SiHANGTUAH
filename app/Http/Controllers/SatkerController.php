<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\pebin;
use App\Models\pbi;
use App\Models\wilayah;
use App\Models\kpknl;
use App\Models\dbsatker;


class SatkerController extends Controller
{
    
    public function index() {
        $dbsatker = dbsatker::all();
        return view('dbsatker.satker')->with('dbsatker',$dbsatker);
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
        return redirect()->route('satker');
    }

}
