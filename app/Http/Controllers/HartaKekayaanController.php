<?php

namespace App\Http\Controllers;

use App\Models\HartaBergerakKendaraan;
use App\Models\HartaTidakBergerak;
use App\Models\HartaKekayaan;
use Illuminate\Http\Request;

class HartaKekayaanController extends Controller
{
    public function harta_tidak_bergerak()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_tidak_bergerak', compact('user'));
    }
    public function tambah_harta_kekayaan(Request $request)
    {
        HartaBergerakKendaraan::create ([
            'jenis_harta' => $request->jenis_harta,
            'luas_tanah' => $request->luas_tanah,
            'atas_nama' => $request->atas_nama,
            'alamat' => $request->alamat,
            'tahun_perolehan' => $request->tahun_perolehan,  
            'harta_perolehan' => $request->harta_perolehan,
            'total_njop_saat_pelaporan' => $request->total_njop_saat_pelaporan,     
    ]);
    return "Berhasil ditambahkan";
    }



    public function harta_kendaraan()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_kendaraan', compact('user'));
    }
    public function tambah_harta_kendaraan(Request $request)
    {
        HartaBergerakKendaraan::create ([
            'jenis_tranportasi' => $request->jenis_tranportasi,
            'nomer_kendaraan' => $request->nomer_kendaraan,
            'merk_model' => $request->merk_model,
            'tahun_pembuatan' => $request->tahun_pembuatan,
            'atas_nama' => $request->atas_nama,  
            'hubungan_keluarga' => $request->hubungan_keluarga,
            'nilai_perolehan' => $request->nilai_perolehan,
            'total_jual_saat_pelaporan' => $request->total_jual_saat_pelaporan,      
    ]);
    return "Berhasil ditambahkan";
    }

    

    public function harta_usaha()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_usaha', compact('user'));
    }

    public function harta_logam()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_logam', compact('user'));
    }

    public function harta_surat_berharga()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_surat_berharga', compact('user'));
    }

    public function harta_uang_tunai()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_uang_tunai', compact('user'));
    }

    public function harta_piutang()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_piutang', compact('user'));
    }

    public function harta_hutang()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_hutang', compact('user'));
    }

}
