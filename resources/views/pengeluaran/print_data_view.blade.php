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
        <table border='1' class="table table-bordered table-striped">
            <tr bcolor=grey>
                <td>
                    Pengeluaran Rutin
                </td>
                @foreach($pengeluaran as $row)
                <td>{{'Rp.' .number_format ($row->pengeluaran_rutin,) }}</td>
                @endforeach
            </tr>

            <tr bcolor=grey>
                <td>
                    Pengeluaran Lainnya
                </td>
                @foreach($pengeluaran as $row)
                <td>{{'Rp.' .number_format($row->pengeluaran_lainnya,) }}</td>
                @endforeach
            </tr>        
        </table>
    </center>
 
</body>
</html>

<script>
    window.print();
</script>