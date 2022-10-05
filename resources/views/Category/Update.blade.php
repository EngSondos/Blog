<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Document</title>
</head>
<body>
    <form action = "{{url('Category/update')}}" method="POST">
        @csrf
        <input type = "hidden" name = "id" value = "{{$Category->id}}">
        <input type = "text" value = "{{$Category->name}}" name = "name">
        <input type = "submit">
    </form>
</body>
</html>