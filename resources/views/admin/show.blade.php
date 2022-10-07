@extends("../parent")
@section('title','Profile')
@section('content')
<div class="container">
<body>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
    </tr>
  </thead>
  <tbody>


    <tr>
    @foreach($admin as $a)
        <tr>
        <td>{{$a->id}}</td>
        <td>{{$a->name}}</td>
         <td>{{$a->email}}</td>
        <td><a href="{{url("admin/delete/$a->id")}}" > delete</a></td>
        <td><a href="{{url("admin/edit/$a->id")}}" > edit</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection

