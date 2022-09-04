<?php

namespace App\Http\Controllers;

use App\Models\UangTunai;
use App\Models\Laporan;
use Illuminate\Http\Request;

class HartaUangTunaiController extends Controller
{
    //
    public function harta_uang_tunai()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_uang_tunai', compact('user'));
    }

    public function tambah_harta_uang_tunai(Request $request)
    {
        UangTunai::create ([
            'jenis_kas' => $request->jenis_kas,
            'atas_nama' => $request->atas_nama,  
            'hubungan_keluarga' => $request->hubungan_keluarga,
            'nama_bank_lembaga_penyimpanan' => $request->nama_bank_lembaga_penyimpanan,
            'nomer_rekening' => $request->nomer_rekening,
            'saldo_saat_pelaporan' => $request->saldo_saat_pelaporan,      
        ]);

        Laporan::create([
            'user_id' => auth()->user()->id,
            'type' => 'Harta Uang Tunai',
            'status' => 1,
        ]);

        return redirect('index_harta_uang_tunai')->with('success', 'Data berhasil ditambahkan!');
    }
}
