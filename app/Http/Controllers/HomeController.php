<?php

namespace App\Http\Controllers;

use App\Models\DataAnak;
use App\Models\DataSuamiIstri;
use App\Models\HartaBergerakKendaraan;
use App\Models\HartaBergerakLogam;
use App\Models\HartaBergerakUsaha;
use App\Models\HartaKekayaan;
use App\Models\HartaTidakBergerak;
use App\Models\Hutang;
use App\Models\Pengeluaran;
use App\Models\PenghasilanHibah;
use App\Models\PenghasilanJabatan;
use App\Models\PenghasilanProfesi;
use App\Models\Piutang;
use App\Models\SuratBerharga;
use App\Models\UangTunai;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $user = auth()->user();
        $dataAnak = DataAnak::count();
        $dataSuamiIstri = DataSuamiIstri::count();
        $hartaBergerakKendaraan = HartaBergerakKendaraan::count();
        $hartaBergerakLogam = HartaBergerakLogam::count();
        $hartaBergerakUsaha = HartaBergerakUsaha::count();
        $hartaKekayaan = HartaKekayaan::count();
        $hartaTidakBergerak = HartaTidakBergerak::count();
        $hutang = Hutang::count();
        $pengeluaran = Pengeluaran::count();
        $penghasilanHibah = PenghasilanHibah::count();
        $penghasilanJabatan = PenghasilanJabatan::count();
        $penghasilanProfesi = PenghasilanProfesi::count();
        $piutang = Piutang::count();
        $suratBerharga = SuratBerharga::count();
        $uangTunai = UangTunai::count();
        return view('home_page', compact(
            'user',
            'dataAnak',
            'dataSuamiIstri',
            'hartaBergerakKendaraan',
            'hartaBergerakLogam',
            'hartaBergerakUsaha',
            'hartaKekayaan',
            'hartaTidakBergerak',
            'hutang',
            'pengeluaran',
            'penghasilanHibah',
            'penghasilanJabatan',
            'penghasilanProfesi',
            'piutang',
            'suratBerharga',
            'uangTunai'
        ));
    }
}
