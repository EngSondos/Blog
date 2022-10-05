@extends('../parent')
@section('title', 'Create Articale')
@section('content')
    <form class="text-left !important" action="{{route('')}}" method="POST">
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
            <input class="form-control" type="file" name="image">
        </div>
        <div class="form-group">
            <select name="category_id" class="form-control">
                <option selected value="">Select Category</option>
                {{-- @foreach ($collection as $item) --}}
                <option value=""></option>
                {{-- @endforeach --}}
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
