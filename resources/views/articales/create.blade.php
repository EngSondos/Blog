@extends('../parent')
@section('title', 'Create Articale')
@section('content')
<form action="{{route('store')}}" method="post">
    @csrf
    <input type="" name="title" id="">
    <input type="" name="body" id="">
    <input type="" name="image" id="">
    <input type="" name="category_id" id="">
    <input type="submit" name="title" id="">



</form>
@endsection
