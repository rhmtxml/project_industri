<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Ini Data Idola Siswa 😊</h1>
    @foreach($idola as $idolaq)

        <ul>
            <li>{{$idolaq}}</li>
        </ul>

    @endforeach
</body>
</html>