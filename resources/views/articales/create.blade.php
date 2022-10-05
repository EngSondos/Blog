@extends('../parent')
@section('title', 'Create Articale')
@section('content')
<form action="{{route('store')}}" method="post">
    @csrf
    <input type="" name="title" id="">
    <input type="" name="body" id="">
    <input type="" name="image" id="">
    <input type="" name="category_id" id="">
    <input type="submit" id="">

    {{session('message') ?? ""}}
    {{session('error') ?? ""}}

    {{-- {{Session::get('message1') ?? ""}} --}}

{{-- <div class="alert alert-danger">{{$message ?? ""}}</div> --}}

</form>
@endsection


