@extends('layouts/main')

@section('title', 'Harta Kekayaan')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">HARTA USAHA</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / Harta Usaha</li>
    </ol>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_harta_tidak_bergerak">HARTA TIDAK BERGERAK</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/index_harta_kendaraan">KENDARAAN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/index_harta_usaha">USAHA</a>
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

    @if(session()->has('success'))
    <div class="alert mt-2 alert-success">
        {{ session()->get('success') }}
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="/tambah_harta_usaha" method="POST">
                @csrf

                <div class="mt-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jenis Usaha</label>
                    <input type="text" name="jenis_usaha" class="form-control" id="exampleFormControlInput1"
                        placeholder="Jenis Usaha">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Atas Nama</label>
                    <input type="text" name="atas_nama" class="form-control" id="exampleFormControlInput1"
                        placeholder="Atas Nama">
                </div>

                <div class="mt-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Hubungan Keluarga / Relasi</label>
                    <input type="text" name="hubungan_keluarga" class="form-control" id="exampleFormControlInput1"
                        placeholder="Hubungan Keluarga / Relasi">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jumlah / Satuan</label>
                    <input type="number" name="jumlah_satuan" class="form-control" id="exampleFormControlInput1"
                        placeholder="Jumlah / Satuan">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Tahun Perolehan</label>
                    <input type="date" name="tahun_perolehan" class="form-control" id="exampleFormControlInput1"
                        placeholder="Tahun Perolehan">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Omzet Per tahun</label>
                    <input type="number" name="omzet_pertahun" class="form-control" id="exampleFormControlInput1"
                        placeholder="Omzet Pertahun">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Penghasilan Bersih Per Tahun</label>
                    <input type="number" name="penghasilan_bersih_pertahun" class="form-control"
                        id="exampleFormControlInput1" placeholder="Penghasilan Bersih Pertahun">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nilai Saat Pelaporan</label>
                    <input type="number" name="nilai_saat_pelaporan" class="form-control" id="exampleFormControlInput1"
                        placeholder="Omzet Pertahun">
                </div>

                <div class="mb-3">
                    <center>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="" class="btn btn-success">Lanjutkan</a>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
