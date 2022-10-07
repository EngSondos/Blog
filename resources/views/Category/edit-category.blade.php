@extends('../parent')
@section('title', 'Update Category')
@section('content')
    <div class="offset-2 col-8 text-primary h1 text-center !important mt-5">
        Update Category
    </div>
    <div class="offset-2 col-8 mt-5 text-center">
        @if (Session::has('category_updated'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('category_updated') }}
            </div>
        @endif
        <form action="{{ route('category.update') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $category->id }}">
            <div class="mb-3">
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>
            <button type="submit" class="btn btn-primary w-15">Update</button>
        </form>
    </div>
@endsection
