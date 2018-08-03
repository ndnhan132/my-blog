@extends('front.layout.master')
@section('content')
    <div class="manage d-flex w-100 ">
        <div class="col-3 mt-0">
            <ul class="list-group  pt-4 px-2">
                <li class="list-group-item  py-2 manage__title rounded-0">
                    <span class="text-white">
                       <i class="fas fa-bars pr-1"></i>
                      Tai khoan
                    </span>
                </li>
                <form method="get" action="{{route('user-profile')}}">
                    <li class="list-group-item rounded-0">
                        <button class="btn btn-link p-0">Ho so</button>
                    </li>
                </form>
                <form method="get" action="{{route('user-edit')}}">
                    <li class="list-group-item rounded-0">
                        <button class="btn btn-link p-0">Cap nhat</button>
                    </li>
                </form>
                <form method="get" action="{{route('user-account')}}">
                    <li class="list-group-item rounded-0">
                        <button class="btn btn-link p-0">Quan ly tai khoan</button>
                    </li>
                </form>
            </ul>
            @if(Cookie::get('user_role_cookie') === 'author')
                <ul class="list-group rounded-0 pt-4 px-2">
                    <li class="list-group-item py-2 manage__title rounded-0">
                        <span class="text-white">
                           <i class="fas fa-bars pr-1"></i>
                            Bai viet
                        </span>
                    </li>
                    <form method="get" action="{{route('user-profile')}}">
                        <li class="list-group-item rounded-0">
                            <button class="btn btn-link p-0">danh sach</button>
                        </li>
                    </form>
                    {{--<form method="get" action="{{route('user-profile')}}">--}}
                        {{--<li class="list-group-item rounded-0">--}}
                            {{--<button class="btn btn-link p-0">Ho so</button>--}}
                        {{--</li>--}}
                    {{--</form>--}}
                    {{--<form method="get" action="{{route('user-profile')}}">--}}
                        {{--<li class="list-group-item rounded-0">--}}
                            {{--<button class="btn btn-link p-0">Ho so</button>--}}
                        {{--</li>--}}
                    {{--</form>--}}
                </ul>
            @endif
        </div>
        <div class="col-9 ">
            @section('manage-content')

            @show
        </div>
    </div>
@endsection