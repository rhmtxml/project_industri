<!-- 
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

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Nama Lengkap</td>
            <td>Jenis Kelamin</td>
            <td>Tanggal Lahir</td>
            <td>Tempat Lahir</td>
            <td>Alamat</td>
            <td>Update/Delete</td>
        </tr>
        @foreach($industri as $data)
        <tr>
            <td>{{ $data->id}}</td>
            <td>{{ $data->nama_lengkap}}</td>
            <td>{{ $data->jenis_kelamin}}</td>
            <td>{{ $data->tanggal_lahir}}</td>
            <td>{{ $data->tempat_lahir}}</td>
            <td>{{ $data->alamat}}</td>
            <td><input type="button" value="Update">
            <input type="button" value="Delete"></td>
        </tr>
        @endforeach
    </table></center>
</body>
</html> -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Biodata</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Biodata</a>
    <form class="d-flex">
      <button class="btn btn-outline-success" type="submit">Tambah</button>
    </form>
  </div>
</nav>
<center>
    <h1>Biodata</h1>

    <table class="table table-bordered" style="width: 90%;">
        <tr>
            <td>ID</td>
            <td>Nama Lengkap</td>
            <td>Jenis Kelamin</td>
            <td>Tanggal Lahir</td>
            <td>Tempat Lahir</td>
            <td>Alamat</td>
            <td>Update/Delete</td>
        </tr>
        @foreach($industri as $data)
        <tr>
            <td>{{ $data->id}}</td>
            <td>{{ $data->nama_lengkap}}</td>
            <td>{{ $data->jenis_kelamin}}</td>
            <td>{{ $data->tanggal_lahir}}</td>
            <td>{{ $data->tempat_lahir}}</td>
            <td>{{ $data->alamat}}</td>
            <td>
                <a href="update" class="btn btn-outline-warning" type="submit">Update</a>
                <a href="Delete" class="btn btn-outline-danger" type="submit">Delete</a>
        </tr>
        @endforeach
    </table></center>










  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>