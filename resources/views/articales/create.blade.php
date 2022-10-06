@extends('../parent')
@section('title', 'Create Articale')
@section('content')
<div class="offset-2 col-8 text-primary h1 text-center !important">
    Create Articales
</div>
{{$message ?? ""}}
{{$error ??""}}
    <form class="text-left !important" action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body"> </textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input class="form-control-file" type="file" name="image">
        </div>
        <div class="form-group">
            <select name="category_id" class="form-control">
                <option selected value="">Select Category</option>
                @foreach ($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
