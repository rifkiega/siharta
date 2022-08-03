@extends('layouts/main')

@section('title', 'Harta Kekayaan')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">HARTA UANG TUNAI</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / Harta Uang Tunai</li>
    </ol>

    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index_harta_tidak_bergerak">HARTA TIDAK BERGERAK</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_harta_kendaraan">KENDARAAN</a>
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
            <a class="nav-link" aria-current="page" href="/index_harta_uang_tunai">UANG TUNAI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_harta_piutang">PIUTANG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_harta_hutang">HUTANG</a>
          </li>
    </ul>
    

    <form action="/tambah_harta_uang_tunai" method="POST">
        @csrf

    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jenis Kas</label>
        <input type="text" name="jenis_kas" class="form-control" id="exampleFormControlInput1" placeholder="Jenis Kas">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Atas Nama</label>
        <input type="text" name="atas_nama" class="form-control" id="exampleFormControlInput1" placeholder="Atas Nama">
    </div>
    
    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Hubungan Keluarga / Relasi</label>
        <input type="text" name="hubungan_keluarga" class="form-control" id="exampleFormControlInput1" placeholder="Hubungan Keluarga / Relasi">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Bank / Lembaga Penyimpanan</label>
        <input type="text" name="nama_bank_lembaga_penyimpanan" class="form-control" id="exampleFormControlInput1" placeholder="Nama Bank / Lembaga Penyimpanan">
    </div>
    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nomer Rekening / Polis</label>
        <input type="text" name="nomer_rekening" class="form-control" id="exampleFormControlInput1" placeholder="Nomer Rekening / Polis">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Saldo Saat Pelaporan</label>
        <input type="text" name="saldo_saat_pelaporan" class="form-control" id="exampleFormControlInput1" placeholder="Saldo Saat Pelaporan">
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