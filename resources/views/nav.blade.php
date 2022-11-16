<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('articale.list')}}">Home <span class="sr-only">(current)</span></a>
            </li>


        @if (Session::has('loginId'))

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Articles
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('articale.create')}}">Add</a>
                    <a class="dropdown-item" href="{{route('articale.list')}}">List</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Category
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('category.create')}}">Add</a>
                    <a class="dropdown-item" href="{{route('category.list')}}">List</a>
                </div>
            </li>

                </ul>
                <form action="{{route('logout')}}">
                <button class="btn btn-danger">Logout</button>
                </form>
@endif
    </div>
</nav>
