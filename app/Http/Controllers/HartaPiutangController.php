<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HartaPiutangController extends Controller
{
    //
    public function harta_piutang()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_piutang', compact('user'));
    }
}
