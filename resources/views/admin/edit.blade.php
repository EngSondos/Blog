@extends("../parent")
@section('title','Edit Profile')
@section('content')
@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
@endif

    <div class="comtainer m-5">
    <form method ="post"  action='{{url("admin\\update")}}'>
        @csrf
        <input type="hidden" name ="id" value ="{{$admin->id}}">
  <div class="form-group">
    <label for="exampleInputName1">Name:</label>
    <input type="text" class="form-control" value="{{$admin->name}}" name="name" aria-describedby="NameHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" class="form-control"  value="{{$admin->email}}" name="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" value="{{$admin->password}}" name="password">
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
