<?php

namespace App\Http\Controllers;

use App\Models\SuratBerharga;
use Illuminate\Http\Request;

class HartaSuratBerhargaController extends Controller
{
    //
    public function harta_surat_berharga()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_surat_berharga', compact('user'));
    }



    
    public function tambah_harta_surat_berharga(Request $request)
    {
        SuratBerharga::create ([
            'jenis_surat' => $request->jenis_surat,
            'atas_nama' => $request->atas_nama,  
            'hubungan_keluarga' => $request->hubungan_keluarga,
            'jumlah_kepemilikan' => $request->jumlah_kepemilikan,
            'nama_perusahaan' => $request->nama_perusahaan,
            'nilai_jual_saat_pelaporan' => $request->nilai_jual_saat_pelaporan,      
       ]);
         return "Berhasil ditambahkan";
    }
}
