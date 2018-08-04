@extends('front.layout.master')
@section('content')
    @php
        $user_id_cookie= Cookie::get('user_id_cookie');
    @endphp
    @if(isset($user_id_cookie))
        <div class="manage d-flex w-100  pb-4">
            <div class="col-3 mt-0">
                <ul class="list-group  pt-4 px-2">
                    <li class="list-group-item  py-2 manage__title rounded-0">
                    <span class="text-white">
                       <i class="fas fa-bars pr-1"></i>
                      Tài khoản
                    </span>
                    </li>
                    <form method="get" action="{{route('user-profile')}}">
                        <li class="list-group-item rounded-0">
                            <button class="btn btn-link p-0">Hồ sơ</button>
                        </li>
                    </form>
                    <form method="get" action="{{route('user-edit')}}">
                        <li class="list-group-item rounded-0">
                            <button class="btn btn-link p-0">Cập nhật</button>
                        </li>
                    </form>
                    <form method="get" action="{{route('user-account')}}">
                        <li class="list-group-item rounded-0">
                            <button class="btn btn-link p-0">Quản lý tài khoản</button>
                        </li>
                    </form>
                </ul>
                @if(Cookie::get('user_role_cookie') === 'author')
                    <ul class="list-group rounded-0 pt-4 px-2">
                        <li class="list-group-item py-2 manage__title rounded-0">
                        <span class="text-white">
                           <i class="fas fa-bars pr-1"></i>
                            Bài viết
                        </span>
                        </li>
                        <form method="get" action="{{route('get-my-article', Cookie::get('user_id_cookie'))}}">
                            <li class="list-group-item rounded-0">
                                <button class="btn btn-link p-0">Danh sách</button>
                            </li>
                        </form>
                    </ul>
                @endif
            </div>
            <div class="col-9 ">
                @section('manage-content')

                @show
            </div>
        </div>
    @else
        <div class="container-fluid d-flex flex-column">
            <h1 class="font-weight-normal text-black-50 text-center mt-5">Hết thời hạn đăng nhập</h1>
            <a href="{{route('home')}}" class="text-center">home</a>
        </div>
    @endif


@endsection