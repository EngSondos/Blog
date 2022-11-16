@extends('../parent')
@section('title', 'Lisr All Categories')
@section('content')
    <div class="offset-2 col-8 text-primary h1 text-center !important mt-5">
        List All Categories
    </div>
    <div class="offset-2 col-8 mt-5 text-center">
        <table class="table text-center my-5">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($category as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                  <td> <form action="{{ url('category\\edit\\') . $c->id }}" >
                    <button class="btn btn-outline-primary w-50"> Edit </button>
                </form></td>
                   <td><form action="{{ url('category\\delete\\') . $c->id }}" >
                    <button class="btn btn-outline-danger w-50"> Delete </button>

                 </form>

                </td>

                    {{-- <td><a href="/edit-category/{{ $c->id }}" class="btn btn-outline-primary w-50">Edit</a></td>
                    <td><a href="/delete-category/{{ $c->id }}" class="btn btn-outline-danger w-50">Delete</a></td> --}}
                </tr>
            @endforeach
        </table>
    </div>
@endsection
