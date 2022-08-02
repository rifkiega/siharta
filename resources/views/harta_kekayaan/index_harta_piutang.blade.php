@extends('layouts/main')

@section('title', 'Harta Kekayaan')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">HARTA PIUTANG</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / Harta Piutang</li>
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
            <a class="nav-link active" aria-current="page" href="/index_harta_uang_tunai">UANG TUNAI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/index_harta_piutang">PIUTANG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_harta_hutang">HUTANG</a>
          </li>
    </ul>
    

    <form action="/tambah_harta_piutang" method="POST">
        @csrf

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Atas Nama</label>
          <div class="input-group mb-3">
              <input required name="atas_nama" type="atas_nama" class="form-control" id="exampleFormControlInput1"  placeholder="atas_nama">
          </div>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Hubungan_Keluarga_relasi</label>
        <div class="input-group mb-3">
            <input required name="hubungan_keluarga_relasi" type="hubungan_keluarga_relasi" class="form-control" id="exampleFormControlInput1"  placeholder="hubungan_keluarga_relasi">
        </div>
    </div>
    
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nama Bank / Lembaga Penyimpanan</label>
      <div class="input-group mb-3">
          <input required name="nama_bank_lembaga_penyimpanan" type="hubungan_keluarga_relasi" class="form-control" id="exampleFormControlInput1"  placeholder="nama_bank_lembaga_penyimpanan">
      </div>
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">No Rekening</label>
    <div class="input-group mb-3">
        <input required name="no_rekening" type="no_rekening" class="form-control" id="exampleFormControlInput1"  placeholder="no_rekening">
    </div>
</div>
    
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Saldo Saat Pelaporan</label>
  <div class="input-group mb-3">
      <input required name="saldo_saat_pelaporan" type="saldo_saat_pelaporan" class="form-control" id="exampleFormControlInput1"  placeholder="saldo_saat_pelaporan">
  </div>
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