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
        <h2> PENGHASILAN JABATAN </h2>
    <table border='1' class="table table-bordered table-striped">
        <tr bcolor=grey>
            <td width="200px">
                Gaji Pokok
            </td>
            @foreach($hasiljabatans as $row)
                <td>{{'Rp.' .number_format($row->gaji_pokok,) }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td width="200px">
                Tunjangan Jabatan
            </td>
            @foreach($hasiljabatans as $row)
                <td>{{'Rp.' .number_format($row->tunjangan_jabatan,) }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td width="200px">
                Tunjangan Lain
            </td>
            @foreach($hasiljabatans as $row)
                <td>{{'Rp.' .number_format($row->tunjangan_lain,) }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td width="200px">
                Potongan
            </td>
            @foreach($hasiljabatans as $row)
                <td>{{'Rp.' .number_format($row->potongan,) }}</td>
            @endforeach
        </tr>

        <tr bcolor=grey>
            <td width="200px">
                Penghasilan Bersih
            </td>
            @foreach($hasiljabatans as $row)
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