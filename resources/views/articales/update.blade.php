@extends('../parent')
@section('title', 'Update Article')
@section('content')
    <div class="offset-2 col-8 text-primary h1 text-center !important">
        Update Articles
    </div>
    @include('component.message')

    <div class="offset-3 col-6 mt-5 text-center">
        <form class="text-left !important" action="{{ route('articale.update',$articale['articale']->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $articale['articale']->title }}">
            </div>
            @error('title')
            <p class="text-danger font-weight-bold">* {{$message}}</p>
        @enderror
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body">{{ $articale['articale']->body }} </textarea>
            </div>
            <div class="form-group">
                    <label for="file">
                        <img class="w-100" style="cursor:pointer" src="{{asset('images/articales/'.$articale['articale']->image)}}" alt="Upload" id="image">
                    </label>
                    <input type="file" name="image" id="file" class="d-none" onchange="loadFile(event)">
                </div>
                @error('image')
                <p class="text-danger font-weight-bold">* {{$message}}</p>
            @enderror
            <div class="form-group">
                <select name="category_id" class="form-control">
                    @foreach ($categories['categories'] as $cat)
                    <option @if($articale['articale']->category_id == $cat->id) selected @endif value="{{$articale['articale']->category->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
            @error('category_id')
            <p class="text-danger font-weight-bold">* {{$message}}</p>
        @enderror
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
@section('js')
<script>
    var loadFile = function(event) {
      var output = document.getElementById('image');
      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
      }
    };
  </script>
@endsection
