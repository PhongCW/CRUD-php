<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Xin chao {{$user['email']}}</p>
    <a href="{{route('logout')}}">Logout</a>
</body>
</html>