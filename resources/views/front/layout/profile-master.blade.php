@extends('front.layout.master')
@section('content')
    <div class="profile d-flex w-100 ">
        <div class="col-3 mt-0">
            <ul class="list-group  pt-4 px-2">
                <li class="list-group-item  py-2 profile__title rounded-0">
                    <span class="text-white">
                       <i class="fas fa-bars pr-1"></i>
                      Tai khoan
                    </span>
                </li>
                <a href="http://localhost:6789/profile/">
                    <li class="list-group-item rounded-0">Ho so</li>
                </a>
                <a href="http://localhost:6789/profile/update">
                    <li class="list-group-item rounded-0">Cap nhat</li>
                </a>
                <a href="http://localhost:6789/profile/account">
                    <li class="list-group-item rounded-0">Quan ly tai khoan</li>
                </a>
                <a href="http://localhost:6789/profile/update">
                    <li class="list-group-item rounded-0">cap nhat</li>
                </a>
            </ul>
            <ul class="list-group rounded-0 pt-4 px-2">
                <li class="list-group-item py-2 profile__title rounded-0">
                    <span class="text-white">
                       <i class="fas fa-bars pr-1"></i>
                        Bai viet
                    </span>
                </li>
                <a href="">
                    <li class="list-group-item rounded-0">Chung</li>
                </a>
                <a href="">
                    <li class="list-group-item rounded-0">Dang bai</li>
                </a>
                <a href="">
                    <li class="list-group-item rounded-0">Quan ly</li>
                </a>
                <a href="">
                    <li class="list-group-item rounded-0">Khac</li>
>>>>>>> origin/nhan-win
                </a>
            </ul>
        </div>
        <div class="col-9">
            @section('profile-content')

            @show
        </div>
    </div>
@endsection