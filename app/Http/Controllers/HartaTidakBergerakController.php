<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HartaTidakBergerak;
use App\Models\Laporan;

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
        HartaTidakBergerak::create([
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
