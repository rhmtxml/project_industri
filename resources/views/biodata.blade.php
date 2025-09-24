
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Biodata</h1>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama Lengkap</td>
            <td>Jenis Kelamin</td>
            <td>Tanggal Lahir</td>
            <td>Tempat Lahir</td>
            <td>Agama</td>
            <td>Alamat</td>
            <td>Telepon</td>
            <td>Email</td>
        </tr>
        @foreach($biodata as $data)
        <tr>
            <td>{{ $data->id}}</td>
            <td>{{ $data->nama_lengkap}}</td>
            <td>{{ $data->jenis_kelamin}}</td>
            <td>{{ $data->tanggal_lahir}}</td>
            <td>{{ $data->tempat_lahir}}</td>
            <td>{{ $data->agama}}</td>
            <td>{{ $data->alamat}}</td>
            <td>{{ $data->telepon}}</td>
            <td>{{ $data->email}}</td>
        </tr>
        @endforeach
    </table></center>
</body>
</html>

