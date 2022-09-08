@extends('layouts/main')

@section('title', 'Harta Kekayaan')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">HARTA SURAT BERHARGA</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / Harta Surat Berharga</li>
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
            <a class="nav-link" aria-current="page" href="/index_harta_surat_berharga">SURAT BERHARGA</a>
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

    @if(session()->has('success'))
    <div class="alert mt-2 alert-success">
        {{ session()->get('success') }}
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="/tambah_harta_surat_berharga" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jenis Surat</label>
                    <input type="text" name="jenis_surat" class="form-control" id="exampleFormControlInput1"
                        placeholder="Jenis Surat">
                </div>

                <div class="mt-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Atas Nama</label>
                    <input type="text" name="atas_nama" class="form-control" id="exampleFormControlInput1"
                        placeholder="Atas Nama">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Hubungan Keluarga / Relasi</label>
                    <input type="text" name="hubungan_keluarga" class="form-control" id="exampleFormControlInput1"
                        placeholder="Hubungan Keluarga / Relasi">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jumlah Lembar / % kepemilikan</label>
                    <input type="text" name="jumlah_kepemilikan" class="form-control" id="exampleFormControlInput1"
                        placeholder="Jumlah Lembar / % kepemilikan">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" class="form-control" id="exampleFormControlInput1"
                        placeholder="Nama Perusahaan">
                </div>

                <div class="mt-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Total jual Saat Pelaporan</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp.</span>
                        <input required name="nilai_jual_saat_pelaporan" type="number" class="form-control"
                            id="exampleFormControlInput1" placeholder="total_jual_saat_pelaporan">
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
