<?php

namespace App\Http\Controllers;

use App\Models\HartaBergerakLogam;
use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\DetailLaporan;

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
        $hartaBergerakLogam = HartaBergerakLogam::create ([
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

        DetailLaporan::create([
            'laporan_id' => $hartaBergerakLogam->id,
            'isi_1' => $request->jenis_harta,
            'isi_2' => $request->atas_nama,
            'isi_3' => $request->hubungan_keluarga,
            'isi_4' => $request->jumlah_satuan,
            'isi_5' => $request->tahun_perolehan,
            'isi_6' => $request->harga_perolehan,
            'isi_7' => $request->nilai_jual_saat_pelaporan,
            'type' => 'Harta Logam',
        ]);

        return redirect('index_harta_logam')->with('success', 'Data berhasil ditambahkan!');
    }
}
