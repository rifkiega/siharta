@extends('layouts/main')

@section('title', 'Harta Logam')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">HARTA LOGAM</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / Harta Logam</li>
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
            <a class="nav-link" aria-current="page" href="/index_harta_logam">LOGAM</a>
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
    

    <form action="/tambah_harta_logam" method="POST">
        @csrf

    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jenis Harta</label>
        <input type="text" name="jenis_harta" class="form-control" id="exampleFormControlInput1" placeholder="Jenis Harta">
    </div>

    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Atas Nama</label>
        <input type="text" name="atas_nama" class="form-control" id="exampleFormControlInput1" placeholder="Atas Nama">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Hubungan Keluarga / Relasi</label>
        <input type="text" name="hubungan_keluarga" class="form-control" id="exampleFormControlInput1" placeholder="Hubungan Keluarga / Relasi">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jumlah / Satuan</label>
        <input type="text" name="jumlah_satuan" class="form-control" id="exampleFormControlInput1" placeholder="Jumlah / Satuan">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tahun Perolehan</label>
        <input type="date" name="tahun_perolehan" class="form-control" id="exampleFormControlInput1" placeholder="Tahun Perolehan">
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Harga Perolehan</label>
      <input type="text" name="harga_perolehan" class="form-control" id="exampleFormControlInput1" placeholder="Harga Perolehan">
  </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nilai Jual Saat Pelaporan</label>
        <input type="text" name="nilai_jual_saat_pelaporan" class="form-control" id="exampleFormControlInput1" placeholder="Nilai Jual Saat Pelaporan">
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