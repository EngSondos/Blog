@extends('../parent')
@section('title', 'List All Articles')
@section('content')
    <div class="offset-2 mt-5 col-8 text-primary h1 text-center !important">
        All Articales
    </div>
    @foreach ($articales as $articale)
        <div class="offset-3 col-6 mt-5 text-center">
            {{ $message ?? '' }}
            <div class="text-right">
                <div class="text-right mb-2" style="display: inline-block">
                    <form action="{{ url('articale\\edit\\') . $articale->id }}">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <input type="submit" value="E" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="text-right mb-2" style="display: inline-block">
                    <form action="{{ url('articale\\delete\\') . $articale->id }}">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <input type="submit" value="X" class="btn btn-danger">
                        </div>
                    </form>
                </div>
            </div>
            <img class="card-img-top" src="{{ asset('images\\articales\\') . $articale->image }}" alt="Card image cap">
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title text-center">Title: {{ $articale->title }}</h5>
                    <p class="card-text mb-2">Content: {{ $articale->body }}</p>
                    <p class="card-text">Category: {{ $articale->category->name }}</p>
                </div>
            </div>
            <p class="text-left mt-2">Comments</p>
            @foreach ($articale->comment as $comment)
                <div class="card mt-2 mb-3">
                    <label> Guest Name: {{ $comment->guest_name }}</label>
                    <p>{{ $comment->body }}</p>
                </div>
            @endforeach
            <p class="text-left mt-2">Add Comment</p>
            <form action="{{ route('comment.store') }}" method="post">
                @csrf
                <input type="text" class="form-control" name="guest_name" placeholder="Name">
                <input type="hidden" class="form-control" name="articale_id" value="{{ $articale->id }}">
                <textarea name="body" placeholder="Write here..." class="form-control mt-2" id="" cols="20"
                    rows="10"></textarea>
                <input type="submit" class="btn btn-primary form-control mt-2 ">
            </form>
        </div>
        </div>
        <hr>
    @endforeach

@endsection
