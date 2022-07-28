@extends('layouts/main')

@section('title', 'Harta Kendaraan')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">HARTA KENDARAAN</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / Harta Kekayaan</li>
    </ol>

    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index_harta_tidak_bergerak">HARTA TIDAK BERGERAK</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/index_harta_kendaraan">KENDARAAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_harta_usaha">USAHA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_harta_logam">LOGAM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_harta_surat_berharga">SURAT BERHARGA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_harta_uang_tunai">UANG TUNAI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_harta_piutang">PIUTANG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_harta_hutang">HUTANG</a>
          </li>
    </ul>
    

    <form action="/tambah_harta_kendaraan" method="POST">
        @csrf

    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jenis Tranportasi</label>
        <input required name="jenis_tranportasi" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jenis Tranportasi">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">No. Kendaraan / Polisi</label>
        <input required name="nomer_kendaraan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nomer Kendaraan">
    </div>
    
    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Merk & Mobil</label>
        <input required name="merk_model" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Merk Mobil">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tahun Pembuatan & Perolehan</label>
        <input required name="tahun_pembuatan" type="date" class="form-control" id="exampleFormControlInput1" placeholder="Tahun Rakit dan Perolehan">
    </div>
    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Atas Nama</label>
        <input required name="atas_nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Pemilik Kendaraan">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Hubungan Keluarga / Relasi</label>
        <input required name="hubungan_keluarga" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Hubungan Keluarga">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nilai Perolehan</label>
        <input required name="nilai_perolehan" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Nilai Perolehan">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Total Jual Saat Pelaporan</label>
        <input required name="total_jual_saat_pelaporan" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nilai Jual Saat Pelaporan">
    </div>

    <div class="mb-3">
        <center>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="" class="btn btn-success">Lanjutkan</a>
        </center>
    </div> 

</form>

</div> 
    

@endsection