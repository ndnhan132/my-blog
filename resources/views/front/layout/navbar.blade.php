<nav class="navbar navbar-expand-lg mb-3 shadow-sm p-2 mb-3 rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <form action="{{route('home')}}" method="get">
                    <button class="nav-link btn btn-link">Home
                    </button>
                </form>
            </li>
            <li class="nav-item">
                <form action="{{route('about')}}" method="get">
                    <button class="nav-link btn btn-link">About
                    </button>
                </form>
            </li>
            <li class="nav-item">
                <form action="{{route('contact')}}" method="get">
                    <button class="nav-link btn btn-link">Contact
                    </button>
                </form>
            </li>
        </ul>
        {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
    </div>
</nav>