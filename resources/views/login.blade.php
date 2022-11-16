@extends('../parent')
@section('title','Login')
@section('content')
<div class="container">
    <div class=" offset-3  col-6 text-primary h1 text-center mt-5">
        Login
    </div>
    <div class="col-4 offset-4">
        <form action="{{url('loginrequest')}}" method="post">
            @csrf
                <input type="text" name="email" class="form-control mt-5">

            <input type="text" name="password" class="form-control mt-3 ">
            <input type="submit" class="btn btn-primary w-100 mt-3" value="Login">

        </form>
    </div>
</div>

@endsection
