<?php

namespace App\Http\Controllers;

use App\Models\DataSuamiIstri;
use Illuminate\Http\Request;

class DataKeluargaController extends Controller
{
    public function index_data_keluarga_suamiistri()
    {
        $user = auth()->user();
        return view('data_keluarga.index_data_suamiistri', compact('user'));
    }

    public function tambah_data_keluarga_suamiistri(Request $request){
        DataKeluargaController::create([
                'nama_suami_istri' => $request->nama_suami_istri,
                'nomer_ktp' => $request->nomer_ktp,
                'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
                'pekerjaan' => $request->pekerjaan,
                'penghasilan_pertahun' => $request->penghasilan_pertahun,
                'alamat_rumah' => $request->alamat_rumah,  
        ]);

    //  return back();
    return "Berhasil ditambahkan";

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_keluarga.index_data_suamiistri');
    }

    

    public function index_data_keluarga_anak()
    {
        $user = auth()->user();
        return view('data_keluarga.index_data_anak', compact('user'));
    }

}
