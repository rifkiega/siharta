<?php

namespace App\Http\Controllers;

use App\Models\PenghasilanJabatan;
use Illuminate\Http\Request;

class PenghasilanJabatanController extends Controller
{
    public function penghasilan_jabatan()
    {
        // return view('home');
        $user = auth()->user();
        return view('penghasilan.index_penghasilan_jabatan', compact('user'));
    }
    //
    public function tambah_penghasilan_jabatan(Request $request)
    {
     PenghasilanJabatan::create([
            'gaji_pokok' => $request->gaji_pokok,
            'tunjangan_jabatan' => $request->tunjangan_jabatan,
            'tunjangan_lain' => $request->tunjangan_lain,
            'potongan' => $request->potongan,
            'penghasilan_bersih' => $request->penghasilan_bersih,     
        ]);
        return back();
    }
}
