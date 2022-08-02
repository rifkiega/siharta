<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HartaUangTunaiController extends Controller
{
    //
    public function harta_uang_tunai()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_uang_tunai', compact('user'));
    }
}
