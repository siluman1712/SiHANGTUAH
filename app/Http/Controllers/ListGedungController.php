<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\dbgedung;
use App\Models\dblantai;
use App\Models\dbuniteselon;

class ListGedungController extends Controller
{
    public function index()
    {
        $dbgedung = dbgedung::all();
        $dblantai = dblantai::all();
        $dbuniteselon = dbuniteselon::all();
        return view('databangunan.listgedung', compact('dbgedung', 'dblantai', 'dbuniteselon'));
    }
}
