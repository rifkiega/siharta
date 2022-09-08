<?php

namespace App\Http\Controllers;

use App\Models\Piutang;
use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\DetailLaporan;

class HartaPiutangController extends Controller
{
    //
    public function harta_piutang()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_piutang', compact('user'));
    }

    public function tambah_harta_piutang(Request $request)
    {
        $piutang = Piutang::create ([
            'atas_nama' => $request->atas_nama,  
            'hubungan_keluarga' => $request->hubungan_keluarga,
            'nama_bank_lembaga_penyimpanan' => $request->nama_bank_lembaga_penyimpanan,
            'no_rekening' => $request->no_rekening,
            'saldo_saat_pelaporan' => $request->saldo_saat_pelaporan,      
        ]);
        
        Laporan::create([
            'user_id' => auth()->user()->id,
            'type' => 'Harta Piutang',
            'status' => 1,
        ]);

        DetailLaporan::create([
            'laporan_id' => $piutang->id,
            'isi_1' => $request->atas_nama,
            'isi_2' => $request->hubungan_keluarga,
            'isi_3' => $request->nama_bank_lembaga_penyimpanan,
            'isi_4' => $request->no_rekening,
            'isi_5' => $request->saldo_saat_pelaporan,
            'type' => 'Harta Piutang',
        ]);

        return redirect('index_harta_piutang')->with('success', 'Data berhasil ditambahkan!');
    }
}
