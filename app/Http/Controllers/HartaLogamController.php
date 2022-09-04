<?php

namespace App\Http\Controllers;

use App\Models\HartaBergerakLogam;
use App\Models\Laporan;
use Illuminate\Http\Request;

class HartaLogamController extends Controller
{
    //
    public function harta_logam()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_logam', compact('user'));
    }

    public function tambah_harta_logam(Request $request)
    {
        HartaBergerakLogam::create ([
            'jenis_harta' => $request->jenis_harta,
            'atas_nama' => $request->atas_nama,  
            'hubungan_keluarga' => $request->hubungan_keluarga,
            'jumlah_satuan' => $request->jumlah_satuan,
            'tahun_perolehan' => $request->tahun_perolehan,
            'harga_perolehan' => $request->harga_perolehan,
            'nilai_jual_saat_pelaporan' => $request->nilai_jual_saat_pelaporan,      
        ]);

        Laporan::create([
            'user_id' => auth()->user()->id,
            'type' => 'Harta Logam',
            'status' => 1,
        ]);

        return redirect('index_harta_logam')->with('success', 'Data berhasil ditambahkan!');
    }
}
