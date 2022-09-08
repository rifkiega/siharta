<?php

namespace App\Http\Controllers;

use App\Models\SuratBerharga;
use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\DetailLaporan;

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
        $suratBerharga = SuratBerharga::create ([
            'jenis_surat' => $request->jenis_surat,
            'atas_nama' => $request->atas_nama,  
            'hubungan_keluarga' => $request->hubungan_keluarga,
            'jumlah_kepemilikan' => $request->jumlah_kepemilikan,
            'nama_perusahaan' => $request->nama_perusahaan,
            'nilai_jual_saat_pelaporan' => $request->nilai_jual_saat_pelaporan,      
        ]);

        Laporan::create([
            'user_id' => auth()->user()->id,
            'type' => 'Harta Surat Berharga',
            'status' => 1,
        ]);

        DetailLaporan::create([
            'laporan_id' => $suratBerharga->id,
            'isi_1' => $request->jenis_surat,
            'isi_2' => $request->atas_nama,
            'isi_3' => $request->hubungan_keluarga,
            'isi_4' => $request->jumlah_kepemilikan,
            'isi_5' => $request->nama_perusahaan,
            'isi_6' => $request->nilai_jual_saat_pelaporan,
            'type' => 'Harta Surat Berharga',
        ]);

        return redirect('index_harta_surat_berharga')->with('success', 'Data berhasil ditambahkan!');
    }
}
