@extends('../parent')
@section('title', 'List All Articles')
@section('content')
    @foreach ($articales as $articale)
        <div class="offset-3 col-6 mt-5 text-center">
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
            <img class="card-img-top" width="30%" src="{{ asset('images\\articales\\') . $articale->image }}"
                alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-center">{{ $articale->title }}</h5>
                <p class="card-text">{{ $articale->body }}</p>
                <p class="card-text">{{ $articale->category->name }}</p>
            </div>
            <form action="" method="post">
                {{-- <input type="text" class="form-control" name="guest_name" placeholder="Name">
            <textarea name="body" placeholder="Write here..." class="form-control mt-2" id="" cols="30" rows="10"></textarea> --}}
                {{-- <input type="submit" class="btn btn-primary form-control mt-2 "> --}}
            </form>
        </div>
        <hr>
        </div>
    @endforeach

@endsection
