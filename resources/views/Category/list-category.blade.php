<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Categories</title>
</head>

<body>
    @if(Session::has('category_deleted'))
    <div class="alert alert-success" role="alert">
        {{Session::get('category_deleted')}}
    </div>
    @endif
    <table class="table">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>delete</th>
            <th>update</th>
        </tr>
        @foreach($category as $c)
        <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->name}}</td>
            <td><a href= "/delete-category/{{$c->id}}" class="btn btn-outline-danger">delete</a></td>
            <td><a href= "/edit-category/{{$c->id}}" class = "btn btn-outline-success">edit</a></td>
        </tr>
        @endforeach
    </table>
</body>

</html>