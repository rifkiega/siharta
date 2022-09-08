@extends('admin.admin')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-right">
            <h6>DETAIL LAPORAN</h2>
        </div>
        {{-- <div class="float-right">
                <a class="btn btn-warning" href=""> Input user</a>
            </div> --}}
    </div>
</div>

<div class="card">
    <div class="card-body">
        {{-- Harta Logam --}}
        <h3 class="font-weight-bold mb-3">Laporan {{ $detail_laporans->type }}</h3>
        <div class="row">
            <div class="mt-3 mb-3 col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Jenis Harta</label>
                <input type="text" readonly class="form-control text-capitalize" value="{{ $detail_laporans->isi_1 }}">
            </div>
            <div class="mt-3 mb-3 col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Atas Nama</label>
                <input type="text" readonly class="form-control" value="{{ $detail_laporans->isi_2 }}">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 mb-3 col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Hubungan Keluarga / Relasi</label>
                <input type="text" readonly class="form-control text-capitalize" value="{{ $detail_laporans->isi_3 }}">
            </div>
            <div class="mt-3 mb-3 col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Jumlah / Satuan</label>
                <input type="text" readonly class="form-control text-capitalize" value="{{ $detail_laporans->isi_4 }}">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 mb-3 col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Tahun Perolehan</label>
                <input type="text" readonly class="form-control text-capitalize" value="{{ $detail_laporans->isi_5 }}">
            </div>
            <div class="mt-3 mb-3 col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Harga Perolehan</label>
                <input type="text" readonly class="form-control text-capitalize" value="Rp. {{number_format($detail_laporans->isi_6, 0)}}">
            </div>
        </div>
        <div class="row">
            <div class="mt-3 mb-3 col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Total jual Saat Pelaporan</label>
                <input type="text" readonly class="form-control text-capitalize" value="Rp. {{number_format($detail_laporans->isi_7, 0)}}">
            </div>
        </div>
        {{-- Harta Logam --}}
    </div>
</div>
@endsection
