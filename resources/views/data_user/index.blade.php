@extends('admin.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>DATA PELAPOR</h2>
            </div>
            <div class="float-right">
                {{-- <a class="btn btn-success" href=""> Input user</a> --}}
            </div>
        </div>
    </div>

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="20px" class="text-center">No</th>
                    <th width="280px"class="text-center">Nama Pelapor</th>
                    <th width="280px"class="text-center">Melaporkan</th>
                    <th width="280px"class="text-center">Alamat</th>
                    <th width="280px"class="text-center">Nomer Telepon</th>
                    <th width="280px"class="text-center">Status</th>
                    <th width="280px"class="text-center">Tanggal Pelaporan</th>
                    <th width="280px"class="text-center">Aksi</th>
                </tr>
                @php
                    $i = 0;
                @endphp
                @foreach ($laporan as $laporan)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td class="text-center">{{ $laporan->user->name }}</td>
                    <td class="text-center">{{ $laporan->type }}</td>
                    <td class="text-center">{{ $laporan->user->alamat }}</td>
                    <td class="text-center">(+62) {{ $laporan->user->no_telp }}</td>
                    <td class="text-center">{{\Carbon\Carbon::parse($laporan->created_at)->isoFormat('D MMMM Y')}}</td>
                    <td class="text-center">
                        @if ($laporan->status == '0')
                            <span class="badge badge-danger">Belum melaporkan</span>
                        @elseif ($laporan->status == '1')
                            <span class="badge badge-success">Berhasil melaporkan</span>
                        @endif
                    </td>
                    <td class="text-center"><a href="{{ route('users.show', $laporan->id)  }}"><i class="bi bi-eye"></i></a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    {{-- {!! $laporan->links() !!} --}}
@endsection
