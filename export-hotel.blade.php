<!DOCTYPE html>
<html>

<head>
    <title>Data Hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5 class="mb-2">Data Hotel</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th >Nama Hotel</th>
                <th >Jenis Hotel</th>
                <th >Nama Hotel</th>
                <th >Alamat</th>
                <th >Jumlah Kamar</th>
                <th >Harga</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($hotel as $item)
            </tr>
            <td>{{ $item->id_hotel }}</td>
            <td>{{ $item->id_jenishotel }}</td>
            <td>{{ $item->nama_hotel }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->jumlah_kamar }}</td>
            <td>{{ $item->harga }}</td>
            @endforeach
        </tbody>
    </table>
</body>
</html>
