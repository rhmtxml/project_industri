<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Ini Data siswa 😊</h1>
    @foreach($siswa as $nama)

        <ul>
            <li>{{$nama}}</li>
        </ul>

    @endforeach

</body>
</html>