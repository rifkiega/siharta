<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HartaHutangController extends Controller
{
    //
    public function harta_hutang()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_hutang', compact('user'));
    }
}
