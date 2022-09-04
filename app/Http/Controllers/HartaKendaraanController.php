<?php

namespace App\Http\Controllers;

use App\Models\HartaBergerakKendaraan;
use App\Models\Laporan;
use Illuminate\Http\Request;

class HartaKendaraanController extends Controller
{
    //
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

        Laporan::create([
            'user_id' => auth()->user()->id,
            'type' => 'Harta Kendaraan',
            'status' => 1,
        ]);
        return redirect('index_harta_kendaraan')->with('success', 'Data berhasil ditambahkan!');
    }
}
