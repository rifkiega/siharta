@extends('layouts/main')

@section('title', 'Harta Kekayaan')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">DATA ANAK</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / Data Anak</li>
    </ol>

    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index_data_suamiistri">DATA SUAMI/ISTRI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/index_data_anak">DATA ANAK</a>
          </li>
    </ul>
    

    <form action="/tambah_data_keluarga_anak" method="POST">
        @csrf

    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Anak</label>
        <input type="text" name="nama_anak" class="form-control" id="exampleFormControlInput1" placeholder="Nama Anak">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tempat / Tanggal Lahir</label>
        <div class="row">
            <div class="col">
              <input type="text" name="tempat" class="form-control" placeholder="tempat" aria-label="tempat">
            </div> /
            <div class="col">
              <input type="date" name="tanggal_lahir" class="form-control" placeholder="tanggal lahir" aria-label="tanggal lahir">
            </div>
          </div>
    </div>
    
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
      <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
          <option selected>Laki - Laki</option>
          <option value="1">perempuan</option>
      </select>
  </div>

    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
        <input type="text" name="pekerjaan" class="form-control" id="exampleFormControlInput1" placeholder="Pekerjaan">
    </div>

    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat Rumah</label>
        <input type="text" name="alamat_rumah" class="form-control" id="exampleFormControlInput1" placeholder="Alamat Rumah">
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