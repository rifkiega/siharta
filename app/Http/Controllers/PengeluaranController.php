<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index_pengeluaran()
    {
        // return view('home');
        $user = auth()->user();
        return view('pengeluaran.index_pengeluaran', compact('user'));
    }
    public function tambah_pengeluaran(Request $request)
    {
        Pengeluaran::create([ 
            'pengeluaran_rutin' => $request->pengeluaran_rutin,
            'pengeluaran_lainnya' => $request->pengeluaran_lainnya,
        ]);    
        return "Berhasil ditambahkan";
    }
}