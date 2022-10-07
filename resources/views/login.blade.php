@extends('../parent')
@section('title','Login')
@section('content')
    <form action="{{url('loginrequest')}}" method="post">
        @csrf
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="submit">

    </form>
@endsection
