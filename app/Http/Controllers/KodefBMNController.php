<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KodefikasiBMN;

class KodefBMNController extends Controller
{
    public function index()
    {
        $dtBMN = KodefikasiBMN::all();
        return view('databmn.kodefikasibmn', compact('dtBMN'));
    }
}
