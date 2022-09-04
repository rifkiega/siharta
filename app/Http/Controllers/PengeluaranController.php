<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use App\Models\Laporan;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function printpengeluaran()
    {
        $pengeluaran = Pengeluaran::get();
        return view('pengeluaran.print_data_view', compact('pengeluaran'));
    }

    public function index_pengeluaran()
    {
        // return view('home');
        $user = auth()->user();
        return view('pengeluaran.index_pengeluaran', compact('user'));
    }
    public function tambah_pengeluaran(Request $request)
    {
        Pengeluaran::create([ 
            'pengeluaran_rutin' => $request->pengeluaran_rutin,
            'pengeluaran_lainnya' => $request->pengeluaran_lainnya,
        ]);   

        Laporan::create([
            'user_id' => auth()->user()->id,
            'type' => 'Laporan Pengeluaran',
            'status' => 1,
        ]);

        return redirect('index_pengeluaran')->with('success', 'Data berhasil ditambahkan!');
    }
}