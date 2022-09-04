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
        <h2> PENGHASILAN PROFESI </h2>
    <table border='1' class="table table-bordered table-striped">
        <tr bcolor=grey>
            <td width="200px">
                Jenis Penghasilan
            </td>
            @foreach($hasilprofesis as $row)
                <td>{{'Rp.' .number_format($row->jenis_penghasilan,) }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td width="200px">
                Lembaga
            </td>
            @foreach($hasilprofesis as $row)
                <td width="600px">{{ $row->lembaga }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td width="200px">
                Penghasilan Bersih
            </td>
            @foreach($hasilprofesis as $row)
                <td>{{'Rp.' .number_format($row->penghasilan_bersih,) }}</td>
            @endforeach
        </tr>
    </table>
</center>

</body>
</html>

<script>
    window.print();
</script>