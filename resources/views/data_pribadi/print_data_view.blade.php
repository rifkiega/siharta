<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Document</title> --}}
</head>
<body>
    <center>
        <h2> DATA PRIBADI </h2>
    <table border='1' class="table table-bordered table-striped">
        <tr bcolor=grey>
            <td width="200px">
                Nama Lengkap
            </td>
            @foreach($datas as $row)
            <td width="600px">{{ $row->nama_lengkap }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Nomer KTP
            </td>
            @foreach($datas as $row)
            <td>{{ $row->nomer_ktp }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Jenis Kelamin
            </td>
            @foreach($datas as $row)
            <td>{{ $row->jenis_kelamin }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Tempat
            </td>
            @foreach($datas as $row)
            <td>{{ $row->tempat }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Tanggal Lahir
            </td>
            @foreach($datas as $row)
            <td>{{ $row->tanggal_lahir }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Agama
            </td>
            @foreach($datas as $row)
            <td>{{ $row->agama }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Status Perkawinan
            </td>
            @foreach($datas as $row)
            <td>{{ $row->status_perkawinan }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Nip 
            </td>
            @foreach($datas as $row)
            <td>{{ $row->nip }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Pangkat Golongan 
            </td>
            @foreach($datas as $row)
            <td>{{ $row->pangkat_golongan }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Eselon 
            </td>
            @foreach($datas as $row)
            <td>{{ $row->eselon }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Jabatan 
            </td>
            @foreach($datas as $row)
            <td>{{ $row->jabatan }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Terhitung Mulai Tanggal 
            </td>
            @foreach($datas as $row)
            <td>{{ $row->terhitung_mulai_tanggal }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Unit Kerja 
            </td>
            @foreach($datas as $row)
            <td>{{ $row->unit_kerja }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Kantor 
            </td>
            @foreach($datas as $row)
            <td>{{ $row->kantor }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Kode Pos Kantor 
            </td>
            @foreach($datas as $row)
            <td>{{ $row->kode_pos_kantor }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Rumah 
            </td>
            @foreach($datas as $row)
            <td>{{ $row->rumah }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Kode Pos Rumah 
            </td>
            @foreach($datas as $row)
            <td>{{ $row->kode_pos_rumah }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                Nomer Telephon 
            </td>
            @foreach($datas as $row)
            <td>{{ $row->nomer_telephon }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td>
                NPWP 
            </td>
            @foreach($datas as $row)
            <td>{{ $row->npwp }}</td>
            @endforeach
        </tr>    
    </table>
</center>

</body>
</html>

<script>
    window.print();
</script>