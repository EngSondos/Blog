@extends('../parent')
@section('title', 'Create Category')
@section('content')
    <div class="offset-2 col-8 text-primary h1 text-center !important mt-5">
        Create Category
    </div>
    <div class="offset-2 col-8 mt-5 text-center">
        @if (Session::has('category_created'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('category_created') }}
            </div>
        @endif
        <form action="{{ route('category.create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"></label>
                <input type="text" placeholder="Category Name" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary w-15">Submit</button>
        </form>
    </div>
@endsection
