<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data post</h1>
         
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Content</td>
        </tr>
        @foreach($post as $data)
        <tr>
            <td>{{ $data->id}}</td>
            <td>{{ $data->title}}</td>
            <td>{{ $data->content}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>