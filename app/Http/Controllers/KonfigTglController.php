<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\KonfigTanggal;


class KonfigTglController extends Controller
{
    public function index()
    {
        $konfig_tanggals = KonfigTanggal::all();
        return view('konfigtanggal.konfigurasi_tanggal', compact('konfig_tanggals'));
    }

    public function edittanggal($id)
    {
        $edittanggal = KonfigTanggal::find($id);
        //dd($edittanggal);
        return view('konfigtanggal.edittanggal', compact('edittanggal'));
    }


}

