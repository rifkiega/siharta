@extends('layouts/main')

@section('title', 'Data Pribadi')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">Laporan Baru</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / Data Pribadi</li>
    </ol>

    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">DATA PRIBADI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/data_keluarga">DATA KELUARGA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/harta_kekayaan">HARTA KEKAYAAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/data_pribadi">PENGHASILAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pengeluaran">PENGELUARAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/selesai">SELESAI</a>
          </li>
    </ul>

    <form action="#" method="POST">
        @csrf

    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nomer KTP</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nomer KTP">
    </div>
    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>laki-laki</option>
            <option value="1">perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tempat / Tanggal Lahir</label>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="tempat" placeholder="tempat" aria-label="tempat">
            </div> /
            <div class="col">
              <input type="date" class="form-control" name="tanggal_lahir" placeholder="tanggal lahir" aria-label="tanggal lahir">
            </div>
          </div>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Agama</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Islam</option>
            <option value="1">Kristen</option>
            <option value="1">Katolik</option>
            <option value="1">Hindu</option>
            <option value="1">Budha</option>
            <option value="1">Khong hu chu</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Status Perkawinan</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Belum Kawin
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Kawin
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Duda/Janda
            </label>
          </div>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIP</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NIP">
    </div>
    
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Pangkat Golongan</label>
      <select class="form-select" name="pangkat_golongan" aria-label="Default select example">
          <option selected value="pangkat_golongan">Penata - III/c</option>
      </select>
  </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Terhitung mulai tanggal*</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Eselon">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Eselon</label>
        <select class="form-select" name="eselon" aria-label="Default select example">
            <option selected value="">STAFF/FUNGSIONAL UMUM</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jabatan">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Terhitung mulai tanggal*</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Eselon">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Unit Kerja</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Unit Kerja">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat</label><br>
        <label for="exampleFormControlInput1" class="form-label">Kantor :</label>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="alamat" aria-label="alamat">
            </div> 
            <div class="col">
              <input type="text" class="form-control" placeholder="kode pos" aria-label="kode pos">
            </div>
        </div>
        <label for="exampleFormControlInput1" class="form-label">Rumah :</label>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="alamat" aria-label="alamat">
            </div> 
            <div class="col">
              <input type="text" class="form-control" placeholder="kode pos" aria-label="kode pos">
            </div>
        </div>
    </div> 

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">No. Telephone</label>
        <input type="text" class="form-control" name="nomer_telephone" id="exampleFormControlInput1" placeholder="nomer_telephone">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NPWP</label>
        <input type="text" class="form-control" nawe="npwp" id="exampleFormControlInput1" placeholder="npwp">
    </div>
    

    <div class="mb-3">
        <center>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/data_keluarga" class="btn btn-success">Lanjutkan</a>
        </center>
    </div> 

</form>

</div> 
    

@endsection

