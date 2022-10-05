@extends('../parent')
@section('title', 'List All Articales')
@section('content')
    <div class="card">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title text-center">Card title</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure accusantium, ea officiis
                eligendi eum vero molestias rem ab laudantium a voluptatibus accusamus enim tempore officia perferendis?
                Doloremque, omnis. Officiis, sunt!.</p>
        </div>
        <form action="" method="post">
            <input type="text" class="form-control" name="guest_name" placeholder="Name">
            <textarea name="body" placeholder="Write here..." class="form-control mt-2" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn btn-primary form-control mt-2 ">
        </form>
    </div>
@endsection
