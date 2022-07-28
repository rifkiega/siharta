<?php

namespace App\Http\Controllers;

use App\Models\PenghasilanJabatan;
use App\Models\PenghasilanProfesi;
use Illuminate\Http\Request;

class PenghasilanController extends Controller
{

    // Penghasilan
    public function penghasilan_jabatan()
    {
        $user = auth()->user();
        return view('penghasilan.index_penghasilan_jabatan', compact('user'));
    }

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

    //---------------------------------------//

    public function penghasilan_profesi()
    {
        // return view('home');
        $user = auth()->user();
        return view('penghasilan.index_penghasilan_profesi', compact('user'));
    }

    public function tambah_penghasilan_profesi(Request $request)
    {
        PenghasilanProfesi::create([
            'jenis_penghasilan' => $request->jenis_penghasilan,
            'lembaga' => $request->lembaga,
            'penghasilan_bersih' => $request->penghasilan_bersih,
        ]);


        return "Berhasil ditambahkan";
    }




    public function penghasilan_hibah()
    {
        // return view('home');
        $user = auth()->user();
        return view('penghasilan.index_penghasilan_profesi', compact('user'));
    }

    public function tambah_penghasilan_hibah(Request $request)
    {
        PenghasilanProfesi::create([
            'jenis_penghasilan' => $request->jenis_penghasilan,
            'alamat_pemberi_hibah' => $request->alamat_pemberi_hibah,
            'total_penghasilan_bersih' => $request->total_penghasilan_bersih,
        ]);

        return back()->with('status', 'Data masuk');
    }
}
