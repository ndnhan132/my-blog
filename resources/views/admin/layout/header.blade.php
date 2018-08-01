<div class="admin admin__header ">
    <nav class="navbar navbar-expand-lg navbar-light admin--bg-green fixed-top justify-content-between p-0">
        <a class="navbar-brand" href="#">
            {{--<i class="fas fa-bars"></i>--}}
            <h5 class="text-white font-italic font-weight-bold text-center pl-3">Blog</h5>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-home fa-2x text-white"></i>
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            <form class="form-inline admin__header__search px-2" method="get" action="">
            @include('admin.layout.search-form')
            <a class="nav-link btn rounded-circle admin__header__notify px-2">
                <i class="far fa-comments rounded-circle border text-white"></i>
                <span class="text-white border rounded-circle bg-danger font-weight-bold">
                    12
                </span>
            </a>
            <a class="nav-link btn rounded-circle pl-2 pr-5">
                <img width="35" height="35" src="{{asset('img/avatar.jpg')}}" class="img-fluid rounded-circle border" alt="">
            </a>
        </div>
    </nav>
</div>