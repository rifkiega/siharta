@extends('layouts/main')

@section('title', 'Harta Kekayaan')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">PENGELUARAN</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / Harta Kekayaan</li>
    </ol>

    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index_pengeluaran">PENGELUARAN</a>
        </li>
    </ul>
    

    <form action="/tambah_pengeluaran" method="POST">
        @csrf

    <div class="mt-3 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Pengeluaran Rutin</label>
        <input required name="pengeluaran_rutin" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Atas Nama">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Pengeluaran Lainnya</label>
        <input required name="pengeluaran_lainnya" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Hubungan Keluarga / Relasi">
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