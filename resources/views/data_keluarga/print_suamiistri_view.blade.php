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
        <h2> DATA SUAMI/ISTRI </h2>
    <table border='1' class="table table-bordered table-striped">
        <tr bcolor=grey>
            <td width="200px">
                Nama Istri/Suami
            </td>
            @foreach($suamiistri as $row)
            <td width="600px">{{ $row->nama_suami_istri }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td width="200px">
                Tanggal Lahir
            </td>
            @foreach($suamiistri as $row)
            <td width="600px">{{ $row->tempat_tanggal_lahir }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td width="200px">
                Pekerjaan
            </td>
            @foreach($suamiistri as $row)
            <td width="600px">{{ $row->pekerjaan }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td width="200px">
                Penghasilan Pertahun
            </td>
            @foreach($suamiistri as $row)
                <td>{{'Rp.' .number_format($row->penghasilan_pertahun,) }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td width="200px">
                Alamat Rumah
            </td>
            @foreach($suamiistri as $row)
            <td width="600px">{{ $row->alamat_rumah }}</td>
            @endforeach
        </tr>

    </table>
</center>

</body>
</html>

<script>
    window.print();
</script>