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
                    <th width="280px"class="text-center">Aksi</th>
                </tr>
                @php
                    $i = 0;
                @endphp
                @foreach ($user as $user)
                <tr>
                    <td class="text-center">{{ ++$i }}</td>
                    <td class="text-center">{{ $user->name }}</td>
                    <td class="text-center">
                        @php
                            $laporan = App\Models\Laporan::where('user_id', $user->id)->first();
                        @endphp
                        @if ($laporan)
                            <form action="{{ route('rekap.data') }}" method="post">
                            @csrf
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <button type="submit" class="btn btn-warning">
                                    <i class="bi bi-file-earmark-pdf"></i>
                                </button>
                            </form>
                        @else
                            <button disabled type="submit" class="btn btn-warning">
                                <i class="bi bi-file-earmark-pdf"></i>
                            </button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    {{-- {!! $laporan->links() !!} --}}
@endsection
