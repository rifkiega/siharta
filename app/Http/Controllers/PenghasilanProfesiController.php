<?php

namespace App\Http\Controllers;

use App\Models\PenghasilanProfesi;
use Illuminate\Http\Request;

class PenghasilanProfesiController extends Controller
{
    public function penghasilan_profesi()
    {
        // return view('home');
        $user = auth()->user();
        return view('penghasilan.index_penghasilan_profesi', compact('user'));
    }
    //
    public function tambah_penghasilan_profesi(Request $request)
    {
        PenghasilanProfesi::create([
            'jenis_penghasilan' => $request->jenis_penghasilan,
            'lembaga' => $request->lembaga,
            'penghasilan_bersih' => $request->penghasilan_bersih,
        ]);


        return "Berhasil ditambahkan";
    }
}
