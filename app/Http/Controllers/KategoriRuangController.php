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

    public function tambahkategori()
    {
        $kategori = KategoriRuangan::all();
        return view('dataruangan.tambahkategori', compact('kategori')); 
    }

    public function insertdata(Request $request)
    {
        return view('tambahkategori.create');
    }

    public function store(Request $request)
    {
        $kategori = $request->all();
        $kategori = new KategoriRuangan;
        $kategori->kodekategori = $request->input('kodekategori');
        $kategori->namakategori = $request->input('namakategori');
        $kategori->save();
        return redirect()->route('kategoriruang')->with('sukses','Data Berhasil ditambahkan!');
    }

    public function tampildata($kodekategori){

        $dtkategori = KategoriRuangan::find($kodekategori);
        //dd($data);
        return view('dataruangan.updatekategori', compact('dtkategori'));
    }

    public function updatekategori(Request $request, $kodekategori)
    {
        KategoriRuangan::find($kodekategori)->update($request->all());
        return redirect()->route('kategoriruang')->with('success','Data Berhasil di Update');
    }


}
