<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('loginrequest')}}" method="post">
        @csrf
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="submit">   

    </form> 
</body>
</html>