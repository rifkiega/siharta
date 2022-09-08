<?php

namespace App\Http\Controllers;

use App\Models\DetailLaporan;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Laporan;

class DataUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporan = Laporan::latest()->get();
        return view ('data_user.index', compact('laporan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail_laporans = DetailLaporan::find($id);
        if (!$detail_laporans) return redirect()->route('users.index')
            ->with(['error' => 'Data dengan id' . $id . ' tidak ditemukan']);
        if ($detail_laporans->type == 'Harta Tidak Bergerak') {
            return view('data_user.show', [
                'detail_laporans' => $detail_laporans,
                'id' => $id
            ]);
        } elseif ($detail_laporans->type == 'Harta Kendaraan') {
            return view('data_user.show1', [
                'detail_laporans' => $detail_laporans,
                'id' => $id
            ]);
        } elseif ($detail_laporans->type == 'Harta Usaha') {
            return view('data_user.show2', [
                'detail_laporans' => $detail_laporans,
                'id' => $id
            ]);
        } elseif ($detail_laporans->type == 'Harta Logam') {
            return view('data_user.show3', [
                'detail_laporans' => $detail_laporans,
                'id' => $id
            ]);
        } elseif ($detail_laporans->type == 'Harta Surat Berharga') {
            return view('data_user.show4', [
                'detail_laporans' => $detail_laporans,
                'id' => $id
            ]);
        } elseif ($detail_laporans->type == 'Harta Uang Tunai') {
            return view('data_user.show5', [
                'detail_laporans' => $detail_laporans,
                'id' => $id
            ]);
        } elseif ($detail_laporans->type == 'Harta Piutang') {
            return view('data_user.show6', [
                'detail_laporans' => $detail_laporans,
                'id' => $id
            ]);
        } elseif ($detail_laporans->type == 'Harta Hutang') {
            return view('data_user.show7', [
                'detail_laporans' => $detail_laporans,
                'id' => $id
            ]);
        } elseif ($detail_laporans->type == 'Penghasilan Jabatan') {
            return view('data_user.show8', [
                'detail_laporans' => $detail_laporans,
                'id' => $id
            ]);
        } elseif ($detail_laporans->type == 'Penghasilan Profesi') {
            return view('data_user.show9', [
                'detail_laporans' => $detail_laporans,
                'id' => $id
            ]);
        } elseif ($detail_laporans->type == 'Penghasilan Hibah') {
            return view('data_user.show10', [
                'detail_laporans' => $detail_laporans,
                'id' => $id
            ]);
        } elseif ($detail_laporans->type == 'Data Suami/Istri') {
            return view('data_user.show11', [
                'detail_laporans' => $detail_laporans,
                'id' => $id
            ]);
        } elseif ($detail_laporans->type == 'Data Anak') {
            return view('data_user.show12', [
                'detail_laporans' => $detail_laporans,
                'id' => $id
            ]);
        } elseif ($detail_laporans->type == 'Laporan Pengeluaran') {
            return view('data_user.show13', [
                'detail_laporans' => $detail_laporans,
                'id' => $id
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('succes','User Berhasil di Hapus');
    }
}
