<?php

namespace App\Http\Controllers;

use App\Models\DataKeluarga;
use Illuminate\Http\Request;

class DataKeluargaController extends Controller
{
    public function index_data_keluarga_suamiistri()
    {
        $user = auth()->user();
        return view('data_keluarga.index_data_suamidanistri', compact('user'));
    }

    public function index_data_keluarga_anak()
    {
        $user = auth()->user();
        return view('data_keluarga.index_data_anak', compact('user'));
    }

}
