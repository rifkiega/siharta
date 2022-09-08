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
        {{-- Harta Usaha --}}
        <h3 class="font-weight-bold mb-3">Laporan {{ $detail_laporans->type }}</h3>
        <div class="row">
            <div class="mt-3 mb-3 col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Pengeluaran Rutin</label>
                <input type="text" readonly class="form-control text-capitalize" value="Rp. {{ number_format($detail_laporans->isi_1, 0)}}">
            </div>
            <div class="mt-3 mb-3 col-md-6">
                <label for="exampleFormControlInput1" class="form-label">Pengeluaran Lainnya</label>
                <input type="text" readonly class="form-control" value="Rp. {{number_format($detail_laporans->isi_2, 0)}}">
            </div>
        </div>
        {{-- Harta Usaha --}}
    </div>
</div>
@endsection
