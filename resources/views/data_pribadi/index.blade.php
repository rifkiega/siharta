@extends('layouts/main')

@section('title', 'Data Pribadi')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">DATA PRIBADI</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / Data Pribadi</li>
    </ol>

    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">DATA PRIBADI</a>
        </li>
    </ul>

    <form action="/tambah_data_pribadi" method="POST">
        @csrf

    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
        <div class="input-group mb-3">
            <input required name="nama_lengkap" type="text" class="form-control" id="exampleFormControlInput1"  placeholder="nama_lengkap">
        </div>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nomer KTP</label>
        <div class="input-group mb-3">
            <input required name="nomer_ktp" type="number" class="form-control" id="exampleFormControlInput1"  placeholder="nomer_ktp">
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
        <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
        <div class="input-group mb-3">
            <input required name="tempat" type="text" class="form-control" id="exampleFormControlInput1"  placeholder="nama_lengkap">
        </div>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
        <div class="row">
            <div class="col">
              <input type="date" class="form-control" name="tanggal_lahir" placeholder="tempat tanggal lahir" aria-label="tempat tanggal lahir">
            </div>
          </div>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Agama</label>
        <select class="form-select" name="agama" aria-label="Default select example">
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
            <input class="form-check-input" type="radio" name="status_perkawinan" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Belum Kawin
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status_perkawinan" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Kawin
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status_perkawinan" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Duda/Janda
            </label>
          </div>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIP</label>
        <div class="input-group mb-3">
            <input required name="nip" type="number" class="form-control" id="exampleFormControlInput1"  placeholder="nip">
        </div>
    </div>
    
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Pangkat / Golongan</label>
        <select class="form-select" name="pangkat_golongan" aria-label="Default select example">
            <option selected>Penata - III/c</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Terhitung Mulai Tanggal</label>
        <div class="row">
            <div class="col">
              <input type="date" class="form-control" name="terhitung_mulai_tanggal" placeholder="terhitung_mulai_tanggal" aria-label="terhitung_mulai_tanggal">
            </div>
          </div>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Eselon</label>
        <select class="form-select" name="eselon" aria-label="Default select example">
            <option selected>STAFF/FUNGSIONAL UMUM</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jabatan</label>
        <div class="input-group mb-3">
            <input required name="jabatan" type="text" class="form-control" id="exampleFormControlInput1"  placeholder="jabatan">
        </div>
    </div>

     <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Terhitung Mulai Tanggal</label>
        <div class="row">
            <div class="col">
              <input type="date" class="form-control" name="terhitung_mulai_tanggal" placeholder="terhitung_mulai_tanggal" aria-label="terhitung_mulai_tanggal">
            </div>
          </div>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Unit Kerja</label>

        <input type="text" class="form-control" name="unit_kerja" id="exampleFormControlInput1" placeholder="Unit Kerja">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat</label><br>
        <div class="input-group mb-3">
            <input required name="alamat" type="text" class="form-control" name="alamat" id="exampleFormControlInput1"  placeholder="alamat">
        </div>
        <label for="exampleFormControlInput1" class="form-label">Kantor :</label>
        <div class="input-group mb-3">
            <input required name="kantor" type="text" class="form-control" name="kantor" id="exampleFormControlInput1"  placeholder="kantor">
        </div>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="alamat" placeholder="alamat" aria-label="alamat">
            </div> 
            <div class="col">
              <input type="text" class="form-control" name="kode_pos_kantor" placeholder="kode pos" aria-label="kode pos">
            </div>
        </div>
        <label for="exampleFormControlInput1" class="form-label">Rumah :</label>
        <div class="input-group mb-3">
            <input required name="rumah" type="text" class="form-control" name="rumah" id="exampleFormControlInput1"  placeholder="rumah">
        </div>
        <div class="row">
            <div class="col">
              <input type="text" class="form-control" name="alamat" placeholder="alamat" aria-label="alamat">
            </div> 
            <div class="col">
              <input type="text" class="form-control" name="kode_pos_rumah" placeholder="kode pos" aria-label="kode pos">
            </div>
        </div>
    </div> 

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nomer Telephon</label>
        <div class="input-group mb-3">
            <input required name="nomer_telephon" type="number" class="form-control" name="nomer_telephon" id="exampleFormControlInput1"  placeholder="nomer_telephon">
        </div>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NPWP</label>
        <div class="input-group mb-3">
            <input required name="npwp" type="number" class="form-control" name="npwp" id="exampleFormControlInput1"  placeholder="npwp">
        </div>
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