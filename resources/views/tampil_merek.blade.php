<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Post Laravel</title>
</head>

<body>
    <center>
        <h1>Data Tabel Merek</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Id</th>
            <th>Nama Merek</th>
        </tr>
        @php $no = 1; @endphp
        @foreach ($merek as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->id }}</td>
                <td>{{ $data->nama_merek }}</td>
            </tr>
        @endforeach
    </table>
    </center>
</body>

</html>

