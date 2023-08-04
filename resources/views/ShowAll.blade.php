<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
            color: whitesmoke;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Here List from database</h1>
@foreach($key as $item)
<ul>
    {{$item['email']}}</li>
    <br></br>
    <a href="{{route('update', [$item['id']])}}">Update</a>
    <a href="{{route('delete', [$item['id']])}}">Delete</a>
</ul>
@endforeach
</body>
</html>