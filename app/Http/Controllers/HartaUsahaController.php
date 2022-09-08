<?php

namespace App\Http\Controllers;

use App\Models\HartaBergerakUsaha;
use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\DetailLaporan;

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
        $hartaBergerakUsaha = HartaBergerakUsaha::create ([
            'jenis_usaha' => $request->jenis_usaha,
            'atas_nama' => $request->atas_nama,
            'hubungan_keluarga' => $request->hubungan_keluarga,
            'jumlah_satuan' => $request->jumlah_satuan,
            'tahun_perolehan' => $request->tahun_perolehan,  
            'omzet_pertahun' => $request->omzet_pertahun,
            'penghasilan_bersih_pertahun' => $request->penghasilan_bersih_pertahun,
            'nilai_saat_pelaporan' => $request->nilai_saat_pelaporan,      
        ]);

        Laporan::create([
            'user_id' => auth()->user()->id,
            'type' => 'Harta Usaha',
            'status' => 1,
        ]);

        DetailLaporan::create([
            'laporan_id' => $hartaBergerakUsaha->id,
            'isi_1' => $request->jenis_usaha,
            'isi_2' => $request->atas_nama,
            'isi_3' => $request->hubungan_keluarga,
            'isi_4' => $request->jumlah_satuan,
            'isi_5' => $request->tahun_perolehan,
            'isi_6' => $request->omzet_pertahun,
            'isi_7' => $request->penghasilan_bersih_pertahun,
            'isi_8' => $request->nilai_saat_pelaporan,
            'type' => 'Harta Usaha',
        ]);
        
        return redirect('index_harta_usaha')->with('success', 'Data berhasil ditambahkan!');
    }
}