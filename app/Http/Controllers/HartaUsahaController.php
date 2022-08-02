<?php

namespace App\Http\Controllers;

use App\Models\HartaBergerakUsaha;
use Illuminate\Http\Request;

class HartaUsahaController extends Controller
{
    //
    public function harta_usaha()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_usaha', compact('user'));
    }



    public function tambah_harta_usaha(Request $request)
    {
        HartaBergerakUsaha::create ([
            'jenis_usaha' => $request->jenis_usaha,
            'atas_nama' => $request->atas_nama,
            'hubungan_keluarga' => $request->hubungan_keluarga,
            'jumlah_satuan' => $request->jumlah_satuan,
            'tahun_perolehan' => $request->tahun_perolehan,  
            'omzet_pertahun' => $request->omzet_pertahun,
            'penghasilan_bersih_pertahun' => $request->penghasilan_bersih_pertahun,
            'nilai_saat_pelaporan' => $request->nilai_saat_pelaporan,      
       ]);
         return "Berhasil ditambahkan";
    }
}