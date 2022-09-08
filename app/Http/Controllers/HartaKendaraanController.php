<?php

namespace App\Http\Controllers;

use App\Models\HartaBergerakKendaraan;
use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\DetailLaporan;

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
        $hartaTidakBergerakKendaraan = HartaBergerakKendaraan::create ([
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

        DetailLaporan::create([
            'laporan_id' => $hartaTidakBergerakKendaraan->id,
            'isi_1' => $request->jenis_tranportasi,
            'isi_2' => $request->nomer_kendaraan,
            'isi_3' => $request->merk_model,
            'isi_4' => $request->tahun_pembuatan,
            'isi_5' => $request->atas_nama,
            'isi_6' => $request->hubungan_keluarga,
            'isi_7' => $request->nilai_perolehan,
            'isi_8' => $request->total_jual_saat_pelaporan,
            'type' => 'Harta Kendaraan',
        ]);

        return redirect('index_harta_kendaraan')->with('success', 'Data berhasil ditambahkan!');
    }
}
