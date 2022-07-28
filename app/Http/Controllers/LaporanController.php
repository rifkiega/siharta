<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function data_pribadi()
    {
        // return view('home');
        $user = auth()->user();
        return view('laporan.data_pribadi', compact('user'));
    }

    public function data_keluarga()
    {
        // return view('home');
        $user = auth()->user();
        return view('laporan.data_keluarga', compact('user'));
    }

    public function harta_kekayaan()
    {
        // return view('home');
        $user = auth()->user();
        return view('laporan.harta_kekayaan', compact('user'));
    }

    public function penghasilan()
    {
        // return view('home');
        $user = auth()->user();
        return view('laporan.penghasilan', compact('user'));
    }

    public function pengeluaran()
    {
        // return view('home');
        $user = auth()->user();
        return view('laporan.pengeluaran', compact('user'));
    }

    public function selesai()
    {
        // return view('home');
        $user = auth()->user();
        return view('laporan.selesai', compact('user'));
    }
}
