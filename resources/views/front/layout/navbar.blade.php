<nav class="navbar navbar-expand-lg mb-3 shadow-sm p-2 mt-2 rounded-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <form action="{{route('home')}}" method="get">
                    <button class="nav-link btn btn-link text-dark">
                        Trang chủ
                        <span class="sr-only">(current)</span>
                    </button>
                </form>
            </li>
            <li class="nav-item">
                <form action="{{route('get-top-article')}}" method="get">
                    <button class="nav-link btn btn-link text-dark">
                        Phổ biến
                    </button>
                </form>
            </li>
            <li class="nav-item">
                <form action="{{route('get-new-article')}}" method="get">
                    <button class="nav-link btn btn-link text-dark">
                        Bài mới
                    </button>
                </form>
            </li>
            <li class="nav-item">
                <form action="{{route('home')}}" method="get">
                    <button class="nav-link btn btn-link text-dark">
                        Thông tin
                    </button>
                </form>
            </li>
            <li class="nav-item">
                <form action="{{route('contact')}}" method="get">
                    <button class="nav-link btn btn-link text-dark">
                        Liên hệ
                    </button>
                </form>
            </li>
        </ul>
         {{--<form class="form-inline my-2 my-lg-0">--}}
            {{--<input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">--}}
            {{--<button class="btn btn-link btn-light" type="submit">Search</button>--}}
        {{--</form>--}}
        <form class="form-inline admin__header__search px-2" method="get"
              action="{{route('search-all-article')}}">
        @include('admin.layout.search-form')
    </div>
</nav>