<?php

namespace App\Http\Controllers;

use App\Models\HartaTidakBergerak;
use Illuminate\Http\Request;

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
    return "Berhasil ditambahkan";
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
