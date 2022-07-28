@extends('layouts/main')

@section('title', 'Harta Kekayaan')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">Laporan Baru</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / Harta Kekayaan</li>
    </ol>

    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/data_pribadi">DATA PRIBADI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/data_keluarga">DATA KELUARGA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/harta_kekayaan">HARTA KEKAYAAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/penghasilan">PENGHASILAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pengeluaran">PENGELUARAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/selesai">SELESAI</a>
          </li>
    </ul>
    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nomer KTP</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nomer KTP">
    </div>
    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jenis Kelamin">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tempat / Tanggal Lahir</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat / Tanggal Lahir">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Agama</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Agama">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Status Perkawinan</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Status Perkawianan">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIP</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NIP">
    </div>
    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Pangkat / Gol</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pangkat / Gol">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Eselon</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Eselon">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jabatan">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Unit Kerja</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Unit Kerja">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="alamat">
    </div> 

    <div class="mb-3">
        <center>
            <button type="button" class="btn btn-primary">Simpan</button>
            <a href="/penghasilan" class="btn btn-success">Lanjutkan</a>
        </center>
    </div> 

</div> 
    

@endsection

