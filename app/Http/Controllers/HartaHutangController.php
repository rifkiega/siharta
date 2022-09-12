<?php

namespace App\Http\Controllers;

use App\Models\Hutang;
use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\DetailLaporan;

class HartaHutangController extends Controller
{
    //
    public function harta_hutang()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_hutang', compact('user'));
    }

    public function tambah_harta_hutang(Request $request)
    {
        $hutang = Hutang::create ([
            'atas_nama' => $request->atas_nama,  
            'hubungan_relasi_keluarga' => $request->hubungan_relasi_keluarga,
            'nama_bank_lembaga_penyimpanan' => $request->nama_bank_lembaga_penyimpanan,
            'no_rekening' => $request->no_rekening,
            'saldo_saat_pelaporan' => $request->saldo_saat_pelaporan,      
        ]);

        Laporan::create([
            'user_id' => auth()->user()->id,
            'type' => 'Harta Hutang',
            'status' => 1,
        ]);

        DetailLaporan::create([
            'laporan_id' => $hutang->id,
            'isi_1' => $request->atas_nama,
            'isi_2' => $request->hubungan_relasi_keluarga,
            'isi_3' => $request->nama_bank_lembaga_penyimpanan,
            'isi_4' => $request->no_rekening,
            'isi_5' => $request->saldo_saat_pelaporan,
            'type' => 'Harta Hutang',
        ]);

        return redirect('index_harta_hutang')->with('success', 'Data berhasil ditambahkan!');
    }
}
