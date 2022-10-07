@extends('../parent')
@section('title', 'Create Article')
@section('content')
    <div class="container">
        <div class="offset-2 col-8 text-primary h1 text-center !important">
            Create Articles
        </div>
        {{ $message ?? '' }}
        {{ $error ?? '' }}
        <div class="offset-3 col-6 mt-5 text-center">
            <form class="text-left !important" action="{{ route('articale.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control background-input" name="title">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control background-input" name="body"> </textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input class="form-control-file background-input" type="file" name="image">
                </div>
                <div class="form-group">
                    <select name="category_id" class="form-control select">
                        <option selected value="">Select Category</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary create-articale">Submit</button>
            </form>
        </div>
    </div>
@endsection
