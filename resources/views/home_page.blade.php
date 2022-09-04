@extends('layouts/main')

@section('title', 'Home')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Data Anak</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $dataAnak }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Data Suami Istri</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $dataSuamiIstri }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Harta Bergerak Kendaraan</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $hartaBergerakKendaraan }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Harta Bergerak Logam</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $hartaBergerakLogam }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Harta Bergerak Usaha</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $hartaBergerakUsaha }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Harta Kekayaan</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $hartaKekayaan }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Data Tidak Bergerak</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $hartaTidakBergerak }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Data Hutang</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $hutang }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Data Pengeluaran</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $pengeluaran }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Data Penghasilan Hibah</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $penghasilanHibah }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Data Penghasilan Jabatan</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $penghasilanJabatan }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Data Penghasilan Profesi</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $penghasilanProfesi }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Data Piutang</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $piutang }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Data Surat Berharga</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $suratBerharga }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-black mb-4">
                <div class="card-body">Data Uang Tunai</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <p class="text-center">{{ $uangTunai }}</p>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection

