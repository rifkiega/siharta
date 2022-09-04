<?php

namespace App\Http\Controllers;

use App\Models\Piutang;
use App\Models\Laporan;
use Illuminate\Http\Request;

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
        Piutang::create ([
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

        return redirect('index_harta_piutang')->with('success', 'Data berhasil ditambahkan!');
    }
}
