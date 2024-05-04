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
        <h1>Data Tabel Transaksi</h1>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Nama Pembeli</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Tanggal</th>

            </tr>
            @php $no = 1; @endphp
            @foreach ($transaksi as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->pembeli->nama_pembeli }}</td>
                    <td>{{ $data->barang->nama_barang}}</td>
                    <td>{{ $data->jumlah }}</td>
                    <td>{{ $data->tanggal }}</td>
                </tr>
            @endforeach
        </table>
    </center>
</body>

</html>