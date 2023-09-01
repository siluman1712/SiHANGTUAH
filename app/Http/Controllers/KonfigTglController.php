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
}

