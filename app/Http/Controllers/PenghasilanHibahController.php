<?php

namespace App\Http\Controllers;

use App\Models\PenghasilanHibah;
use Illuminate\Http\Request;

class PenghasilanHibahController extends Controller
{
    public function penghasilan_hibah()
    {
        // return view('home');
        $user = auth()->user();
        return view('penghasilan.index_penghasilan_hibah', compact('user'));
    }

    public function tambah_penghasilan_hibah(Request $request)
    {
        PenghasilanHibah::create([
            'jenis_penghasilan' => $request->jenis_penghasilan,
            'alamat_pemberi_hibah' => $request->alamat_pemberi_hibah,
            'total_penghasilan_bersih' => $request->total_penghasilan_bersih,
        ]);

        return back();
    }
}
