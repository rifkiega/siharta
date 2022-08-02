@extends('layouts/main')

@section('title', 'Harta Kekayaan')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">DATA KELUARGA</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / Harta Kekayaan</li>
    </ol>

    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index_data_suamiistri">DATA SUAMI/ISTRI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_data_anak">DATA ANAK</a>
          </li>
    </ul>
    

    <form action="/tambah_data_keluarga_suamiistri" method="POST">
        @csrf

    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Istri/Suami</label>
        <input required name="nama_suami_istri" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jenis Penghasilan">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tempat / Tanggal Lahir</label>
        <div class="row">
            <div class="col">
              <input required name="tempat_tanggal_lahir" type="date" class="form-control" placeholder="tanggal lahir" aria-label="tanggal lahir">
            </div>
          </div>
    </div>
    

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pekerjaan" value="pns" />
            <label class="form-check-label" for="inlineRadio1">PNS</label>
          </div>
          
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="pekerjaan" value="non pns" />
            <label class="form-check-label" for="inlineRadio2">NON PNS</label>
          </div>
          
    </div>

    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Penghasilan Pertahun</label>
        <input required name="tempat_tanggal_lahir" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Jenis Penghasilan">
    </div>

    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
        <input required name="alamat_rumah" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jenis Penghasilan">
    </div>


    <div class="mb-3">
        <center>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/index_harta_kendaraan" class="btn btn-success">Lanjutkan</a>
        </center>
    </div> 

</form>

</div> 
    

@endsection