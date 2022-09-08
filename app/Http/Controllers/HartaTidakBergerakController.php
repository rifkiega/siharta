<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HartaTidakBergerak;
use App\Models\Laporan;
use App\Models\DetailLaporan;

class HartaTidakBergerakController extends Controller
{
    //
    public function harta_tidak_bergerak()
    {
        // return view('home');
        $user = auth()->user();
        return view('harta_kekayaan.index_harta_tidak_bergerak', compact('user'));
    }

    public function tambah_harta_tidak_bergerak(Request $request)
    {
        $hartaTidakBergerak = HartaTidakBergerak::create([
            'jenis_harta' => $request->jenis_harta,
            'luas_tanah' => $request->luas_tanah,
            'atas_nama' => $request->atas_nama,
            'alamat' => $request->alamat,
            'tahun_perolehan' => $request->tahun_perolehan,
            'harga_peroleh' => $request->harga_peroleh,
            'total_njop_saat_pelaporan' => $request->total_njop_saat_pelaporan,
        ]);

        Laporan::create([
            'user_id' => auth()->user()->id,
            'type' => 'Harta Tidak Bergerak',
            'status' => 1,
        ]);

        DetailLaporan::create([
            'laporan_id' => $hartaTidakBergerak->id,
            'isi_1' => $request->jenis_harta,
            'isi_2' => $request->luas_tanah,
            'isi_3' => $request->atas_nama,
            'isi_4' => $request->alamat,
            'isi_5' => $request->tahun_perolehan,
            'isi_6' => $request->harga_peroleh,
            'isi_7' => $request->total_njop_saat_pelaporan,
            'type' => 'Harta Tidak Bergerak',
        ]);

        return redirect('index_harta_tidak_bergerak')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('harta_kekayaan.index_harta_tidak_bergerak');
    }
}
