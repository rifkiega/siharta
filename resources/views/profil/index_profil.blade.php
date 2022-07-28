@extends('layouts/main')

@section('title', 'Profile')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nip</th>
        <th scope="col">Nama</th>
        <th scope="col">alamat</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">TTL</th>
        <th scope="col">Unit Kerja</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Prodi</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>0234478545396</td>
        <td>Rifki</td>
        <td>desa sukahaji</td>
        <td>Laki - Laki</td>
        <td>Indramayu, 30 agustus 2001</td>
        <td>Polindra</td>
        <td>Mahasiswa</td>
        <td>Teknik Informatika</td>
      </tr>
    
    </tbody>
  </table>
  @endsection