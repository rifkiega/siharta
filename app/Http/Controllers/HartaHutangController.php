<?php

namespace App\Http\Controllers;

use App\Models\Hutang;
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




    public function tambah_harta_hutang(Request $request)
    {
        Hutang::create ([
            'atas_nama' => $request->atas_nama,  
            'hubungan_relasi_keluarga' => $request->hubungan_relasi_keluarga,
            'nama_bank_lembaga_penyimpanan' => $request->nama_bank_lembaga_penyimpanan,
            'no_rekening' => $request->no_rekening,
            'saldo_saat_pelaporan' => $request->saldo_saat_pelaporan,      
       ]);
         return "Berhasil ditambahkan";
    }
}
