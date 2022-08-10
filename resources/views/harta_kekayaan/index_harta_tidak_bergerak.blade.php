@extends('layouts/main')

@section('title', 'Harta Kekayaan')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">HARTA TIDAK BERGERAK</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / Harta Tidak Bergerak</li>
    </ol>

    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/index_harta_tidak_bergerak">HARTA TIDAK BERGERAK</a>
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
            <a class="nav-link active" aria-current="page" href="/index_harta_piutang">PIUTANG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_harta_hutang">HUTANG</a>
          </li>
    </ul>
    

    <form action="/tambah_harta_tidak_bergerak" method="POST">
        @csrf

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Jenis Harta</label>
          <div class="input-group mb-3">
              <input required name="jenis_harta" type="text" class="form-control" id="exampleFormControlInput1"  placeholder="jenis_harta">
          </div>
      </div>

    <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Luas Tanah</label>
          <div class="input-group mb-3">
              <input required name="luas_tanah" type="number" class="form-control" id="exampleFormControlInput1"  placeholder="luas_tanah">
          </div>
      </div>

    
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Atas Nama</label>
        <div class="input-group mb-3">
            <input required name="atas_nama" type="text" class="form-control" id="exampleFormControlInput1"  placeholder="atas_nama">
        </div>
    </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
        <div class="input-group mb-3">
            <input required name="alamat" type="text" class="form-control" id="exampleFormControlInput1"  placeholder="alamat">
        </div>
    </div>
    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tahun Peroleh</label>
        <div class="input-group mb-3">
            <input required name="tahun_perolehan" type="date" class="form-control" id="exampleFormControlInput1"  placeholder="tahun_perolehan">
        </div>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">harta Perolehan</label>
      <div class="input-group mb-3">
          <input required name="harta_perolehan" type="text" class="form-control" id="exampleFormControlInput1"  placeholder="harta_perolehan">
      </div>
  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">harga Peroleh</label>
    <div class="input-group mb-3">
        <input required name="harga_peroleh" type="number" class="form-control" id="exampleFormControlInput1"  placeholder="harga_peroleh">
    </div>
</div>

<div class="mt-3 mb-3">
  <label for="exampleFormControlInput1" class="form-label">Total NJOP Saat Pelaporan</label>
  <div class="input-group mb-3">
      <span class="input-group-text">Rp.</span>
      <input required name="total_njop_saat_pelaporan" type="number" class="form-control" id="exampleFormControlInput1"  placeholder="total_njop_saat_pelaporan">
  </div>
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