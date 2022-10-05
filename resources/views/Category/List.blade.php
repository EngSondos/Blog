<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    <table  class="table">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>delete</th>
            <th>edit</th>
        </tr>
        @foreach($Category as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->name}}</td>
            <td><button href = '{{url("Category/delete/$c->id")}}' type="button" class="btn btn-outline-danger">delete</button></td>
            <td><button href = '{{url("Category/edit/$c->id")}}' type="button" class="btn btn-outline-primary">edit</button></td>
    
        </tr>
        @endforeach
    </table>
</body>
</html>