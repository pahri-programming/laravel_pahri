<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Post</h1>

    @foreach($posts as $data)
    <p>{{$data->id}}</p>
    <p>{{$data->title}}</p>
    <p>{{$data->content}}</p>
    <hr>
    @endforeach
</body>
</html>