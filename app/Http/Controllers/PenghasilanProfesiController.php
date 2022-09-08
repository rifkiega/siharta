<?php

namespace App\Http\Controllers;

use App\Models\PenghasilanProfesi;
use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\DetailLaporan;

class PenghasilanProfesiController extends Controller
{
    public function printhasilprofesis()
    {
        $hasilprofesis = PenghasilanProfesi::get();
        return view('penghasilan.print_penghasilan_profesi_view', compact('hasilprofesis'));
    }

    public function penghasilan_profesi()
    {
        // return view('home');
        $user = auth()->user();
        return view('penghasilan.index_penghasilan_profesi', compact('user'));
    }
    //
    public function tambah_penghasilan_profesi(Request $request)
    {
        $penghasilanProfesi = PenghasilanProfesi::create([
            'jenis_penghasilan' => $request->jenis_penghasilan,
            'lembaga' => $request->lembaga,
            'penghasilan_bersih' => $request->penghasilan_bersih,
        ]);

        Laporan::create([
            'user_id' => auth()->user()->id,
            'type' => 'Penghasilan Profesi',
            'status' => 1,
        ]);

        DetailLaporan::create([
            'laporan_id' => $penghasilanProfesi->id,
            'isi_1' => $request->jenis_penghasilan,
            'isi_2' => $request->lembaga,
            'isi_3' => $request->penghasilan_bersih,
            'type' => 'Penghasilan Profesi',
        ]);

        return redirect('index_penghasilan_profesi')->with('success', 'Data berhasil ditambahkan!');
    }
}
