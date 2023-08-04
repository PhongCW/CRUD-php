<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($key as $item)
        <ul>
            <li>{{$item['email']}}</li>
            <li><a href="{{route('update', [$item['id']])}}">Update</a></li>
            <li><a href="{{route('delete', [$item['id']])}}">Delete</a></li>
        </ul>
    @endforeach
</body>
</html>