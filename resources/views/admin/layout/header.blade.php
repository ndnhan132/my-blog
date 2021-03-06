<div class="admin admin__header ">
    <nav class="navbar navbar-expand-lg navbar-light admin--bg-green fixed-top justify-content-between p-0">
        <a class="navbar-brand" href="{{route('home')}}">
            {{--<i class="fas fa-bars"></i>--}}
            <h5 class="text-white font-italic font-weight-bold text-center pl-3">MyBlog</h5>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">
                        <i class="fas fa-home fa-2x text-white"></i>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
                <a class="nav-link btn rounded-circle pl-2">
                    <img width="35" height="35" src="{{$user_img_cookie}}" class="img-fluid rounded-circle border"
                         alt="">
                </a>
                <span class="nav-link btn px-2 text-white text-capitalize">
                    {{$user_name_cookie}}
                </span>
            <form action="{{route('logout')}}" method="get">
                <button class="btn btn-link text-white border-left rounded-0">Đăng xuất</button>
            </form>
        </div>
    </nav>
</div>