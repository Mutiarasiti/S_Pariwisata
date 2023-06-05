<!DOCTYPE html>
<html>

<head>
    <title>Data Pemesanan</title>
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
        <h5 class="mb-2">Data Pemesanan</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th >Nama Objek Atraksi</th>
                <th >Nama</th>
                <th >Alamat</th>
                <!-- <th >Tgl Pemesanan</th>                      -->
               </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($pemesanan as $item)
                <tr>
                <td>{{ $item->id_objek_atraksi }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <!-- <td>{{ ($item->tgl_pemesanan)}}</td> -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>