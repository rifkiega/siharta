@extends('layouts/main')

@section('title', 'Penghasilan Hibah')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">PENGHASILAN HIBAH</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / penghasilan Hibah</li>
    </ol>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_penghasilan_jabatan">PENGHASILAN JABATAN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_penghasilan_profesi">PENGHASILAN PROFESI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/index_penghasilan_hibah">PENGHASILAN HIBAH</a>
        </li>
    </ul>

    @if(session()->has('success'))
    <div class="alert mt-2 alert-success">
        {{ session()->get('success') }}
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="/tambah_penghasilan_hibah" method="POST">
                @csrf

                <div class="mt-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jenis Penghasilan</label>
                    <div class="input-group mb-3">
                        <input required name="jenis_penghasilan" type="text" class="form-control"
                            id="exampleFormControlInput1" placeholder="jenis_penghasilan">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat Pemberi Hibah</label>
                    <div class="input-group mb-3">
                        <input required name="alamat_pemberi_hibah" type="text" class="form-control"
                            id="exampleFormControlInput1" placeholder="alamat_pemberi_hibah">
                    </div>
                </div>

                <div class="mt-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Total Penghasilan Bersih</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp.</span>
                        <input required name="total_penghasilan_bersih" type="number" class="form-control"
                            id="exampleFormControlInput1" placeholder="total_penghasilan_bersih">
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
    </div>
</div>
@endsection
