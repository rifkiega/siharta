<?php

namespace App\Http\Controllers;

use App\Models\DataAnak;
use App\Models\Laporan;
use App\Models\DataSuamiIstri;
use Illuminate\Http\Request;
use App\Models\DetailLaporan;

class DataKeluargaController extends Controller
{
    // public function print()
    // {
    //     $datas = DataSuamiIstri::get();
    //     return view('data_pribadi.print_data_view', compact('datas'));
    // }
    public function printsuamiistri()
    {
        $suamiistri = DataSuamiIstri::get();
        return view('data_keluarga.print_suamiistri_view', compact('suamiistri'));
    }

    public function index_data_keluarga_suamiistri()
    {
        $user = auth()->user();
        return view('data_keluarga.index_data_suamiistri', compact('user'));
    }

    public function tambah_data_keluarga_suamiistri(Request $request)
    {
        $dataSuamiIstri = DataSuamiIstri::create([
                'nama_suami_istri' => $request->nama_suami_istri,
                'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
                'pekerjaan' => $request->pekerjaan,
                'penghasilan_pertahun' => $request->penghasilan_pertahun,
                'alamat_rumah' => $request->alamat_rumah,  
        ]);

        Laporan::create([
            'user_id' => auth()->user()->id,
            'type' => 'Data Suami/Istri',
            'status' => 1,
        ]);

        DetailLaporan::create([
            'laporan_id' => $dataSuamiIstri->id,
            'isi_1' => $request->nama_suami_istri,
            'isi_2' => $request->tempat_tanggal_lahir,
            'isi_3' => $request->pekerjaan,
            'isi_4' => $request->penghasilan_pertahun,
            'isi_5' => $request->alamat_rumah,
            'type' => 'Data Suami/Istri',
        ]);

        return redirect('index_data_suamiistri')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_keluarga.index_data_suamiistri');
    }

    public function printanak()
    {
        $anaks = DataAnak::get();
        return view('data_keluarga.print_anak_view', compact('anaks'));
    }
    

    public function index_data_keluarga_anak()
    {
        $user = auth()->user();
        return view('data_keluarga.index_data_anak', compact('user'));
    }

    public function tambah_data_keluarga_anak(Request $request){
        $dataAnak = DataAnak::create([
                'nama_anak' => $request->nama_anak,
                'tempat' => $request->tempat,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'pekerjaan' => $request->pekerjaan,
                'alamat_rumah' => $request->alamat_rumah,  
        ]);

        Laporan::create([
            'user_id' => auth()->user()->id,
            'type' => 'Data Anak',
            'status' => 1,
        ]);

        DetailLaporan::create([
            'laporan_id' => $dataAnak->id,
            'isi_1' => $request->nama_anak,
            'isi_2' => $request->tempat,
            'isi_3' => $request->tanggal_lahir,
            'isi_4' => $request->jenis_kelamin,
            'isi_5' => $request->pekerjaan,
            'isi_6' => $request->alamat_rumah,
            'type' => 'Data Anak',
        ]);

        return redirect('index_data_anak')->with('success', 'Data berhasil ditambahkan!');
    }
}