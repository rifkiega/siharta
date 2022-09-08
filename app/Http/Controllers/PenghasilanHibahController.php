<?php

namespace App\Http\Controllers;

use App\Models\PenghasilanHibah;
use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\DetailLaporan;

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
        $penghasilanHibah = PenghasilanHibah::create([
            'jenis_penghasilan' => $request->jenis_penghasilan,
            'alamat_pemberi_hibah' => $request->alamat_pemberi_hibah,
            'total_penghasilan_bersih' => $request->total_penghasilan_bersih,
        ]);

        Laporan::create([
            'user_id' => auth()->user()->id,
            'type' => 'Penghasilan Hibah',
            'status' => 1,
        ]);

        DetailLaporan::create([
            'laporan_id' => $penghasilanHibah->id,
            'isi_1' => $request->jenis_penghasilan,
            'isi_2' => $request->alamat_pemberi_hibah,
            'isi_3' => $request->total_penghasilan_bersih,
            'type' => 'Penghasilan Hibah',
        ]);

        return redirect('index_penghasilan_hibah')->with('success', 'Data berhasil ditambahkan!');
    }
}
