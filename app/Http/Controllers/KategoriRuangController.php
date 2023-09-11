<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriRuangan;

class KategoriRuangController extends Controller
{
    public function index()
    {
        $RuangKategori = KategoriRuangan::all();
        return view('dataruangan.kategoriruang', compact('RuangKategori'));
    }
}
