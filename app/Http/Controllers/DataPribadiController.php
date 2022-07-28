<?php

namespace App\Http\Controllers;

use App\Models\DataPribadi;
use Illuminate\Http\Request;


class DataPribadiController extends Controller
{

   // data pribadi
    public function index()
    {
        $user = auth()->user();
        return view('data_pribadi.index', compact('user'));
    }
    
    public function tambah_data_pribadi(Request $request){
        DataPribadi::create([
                'nama_lengkap' => $request->nama_lengkap,
                'nomer_ktp' => $request->nomer_ktp,
                'jenis_kelamin' => $request->jenis_kelamin,
                'tempat' => $request->tempat,
                'tanggal_lahir' => $request->tanggal_lahir,
                'agama' => $request->agama,
                'status_perkawinan' => $request->status_perkawinan,
                'nip' => $request->nip,
                'pangkat_golongan' => $request->pangkat_golongan,
                'eselon' => $request->eselon,
                'jabatan' => $request->jabatan,
                'terhitung_mulai_tanggal' => $request->terhitung_mulai_tanggal,
                'unit_kerja' => $request->unit_kerja,
                'kantor' => $request->kantor,
                'kode_pos_kantor' => $request->kode_pos_kantor,
                'rumah' => $request->rumah,
                'kode_pos_rumah' => $request->kode_pos_rumah,
                'alamat' => $request->alamat,
                'nomer telephon' => $request->nomer_telephon,
                'npwp' => $request->npwp,      
                ]);

    //  return back();
    return "Berhasil ditambahkan";

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_pribadi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        // DataPribadi::create($request->all());
     
        return redirect()->route('DataPribadi.index')
                        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
