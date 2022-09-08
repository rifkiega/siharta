<?php

namespace App\Http\Controllers;

use App\Models\PenghasilanJabatan;
use App\Models\Laporan;
use Illuminate\Http\Request;
use App\Models\DetailLaporan;

class PenghasilanJabatanController extends Controller
{
    public function printhasiljabatan()
    {
        $hasiljabatans = PenghasilanJabatan::get();
        return view('penghasilan.print_penghasilan_jabatan_view', compact('hasiljabatans'));
    }

    public function penghasilan_jabatan()
    {
        // return view('home');
        $user = auth()->user();
        return view('penghasilan.index_penghasilan_jabatan', compact('user'));
    }
    //
    public function tambah_penghasilan_jabatan(Request $request)
    {
        $penghasilanJabatan = PenghasilanJabatan::create([
            'gaji_pokok' => $request->gaji_pokok,
            'tunjangan_jabatan' => $request->tunjangan_jabatan,
            'tunjangan_lain' => $request->tunjangan_lain,
            'potongan' => $request->potongan,
            'penghasilan_bersih' => $request->penghasilan_bersih,     
        ]);

        Laporan::create([
            'user_id' => auth()->user()->id,
            'type' => 'Penghasilan Jabatan',
            'status' => 1,
        ]);

        DetailLaporan::create([
            'laporan_id' => $penghasilanJabatan->id,
            'isi_1' => $request->gaji_pokok,
            'isi_2' => $request->tunjangan_jabatan,
            'isi_3' => $request->tunjangan_lain,
            'isi_4' => $request->potongan,
            'isi_5' => $request->penghasilan_bersih,
            'type' => 'Penghasilan Jabatan',
        ]);

        return redirect('index_penghasilan_jabatan')->with('success', 'Data berhasil ditambahkan!');
    }
}
