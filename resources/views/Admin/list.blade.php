<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>#</th>
            <th>name</th>
            @if(auth()->Admin()->email =="email")
            <th>delete</th>
            <th>update</th>
            @endif
        </tr>
        @foreach($Admin as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->name}}</td>
            @if(auth()->Admin()->email=="email")

            <td><a href='{{url("Admin/delete/$c->id")}}'>delete</a></td>
            <td><a href='{{url("Admin/edit/$c->id")}}'>edit</a></td>
            @endif
        </tr>
        @endforeach
    </table>
</body>
</html>