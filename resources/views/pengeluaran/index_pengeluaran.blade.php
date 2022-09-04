@extends('layouts/main')

@section('title', 'Harta Kekayaan')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">PENGELUARAN</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Laporan Baru / Pengeluaran</li>
    </ol>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/index_pengeluaran">PENGELUARAN</a>
        </li>
    </ul>

    @if(session()->has('success'))
    <div class="alert mt-2 alert-success">
        {{ session()->get('success') }}
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="/tambah_pengeluaran" method="POST">
                @csrf

                <div class="mt-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Pengeluaran Rutin</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp.</span>
                        <input required name="pengeluaran_rutin" type="number" class="form-control"
                            id="exampleFormControlInput1" placeholder="Pengeluaran Rutin">
                    </div>
                </div>

                <div class="mt-3 mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Pengeluaran Lainnya</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Rp.</span>
                        <input required name="pengeluaran_lainnya" type="number" class="form-control"
                            id="exampleFormControlInput1" placeholder="Pengeluaran Lainnya">
                    </div>
                </div>

                <div class="mb-3">
                    <center>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/print_pengeluaran" class="btn btn-success">Print</a>
                        <a href="" class="btn btn-success">Lanjutkan</a>
                    </center>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
