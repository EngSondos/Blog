@extends('../parent')
@section('title', 'Create Articale')
@section('content')
<form action="{{route('update')}}" method="post">
    @csrf
    <input type="" name="id" id="id" value="{{$articale->id}}">
    <input type="" name="title" id="" value="{{$articale->title}}">
    <input type="" name="body" id="" value="{{$articale->title}}">
    <input type="" name="image" id="" value="{{$articale->title}}">
    <input type="" name="category_id" id="" value="">
    <input type="submit" id="">

</form>
@endsection


