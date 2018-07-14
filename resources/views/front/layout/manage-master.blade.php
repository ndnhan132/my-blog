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
                <a href="http://localhost:6789/manage/profile">
                    <li class="list-group-item rounded-0">Ho so</li>
                </a>
                <a href="http://localhost:6789/manage/update">
                    <li class="list-group-item rounded-0">Cap nhat</li>
                </a>
                <a href="http://localhost:6789/manage/account">
                    <li class="list-group-item rounded-0">Quan ly tai khoan</li>
                </a>
                <a href="">
                    <li class="list-group-item rounded-0">khac</li>
                </a>
            </ul>
            <ul class="list-group rounded-0 pt-4 px-2">
                <li class="list-group-item py-2 manage__title rounded-0">
                    <span class="text-white">
                       <i class="fas fa-bars pr-1"></i>
                        Bai viet
                    </span>
                </li>
                <a href="http://localhost:6789/manage/article/info">
                    <li class="list-group-item rounded-0">Chung</li>
                </a>
                <a href=" http://localhost:6789/manage/article/new">
                    <li class="list-group-item rounded-0">Dang bai</li>
                </a>
                <a href="http://localhost:6789/manage/article/manage">
                    <li class="list-group-item rounded-0">Quan ly</li>
                </a>
                <a href="">
                    <li class="list-group-item rounded-0">Khac</li>
                </a>
            </ul>
        </div>
        <div class="col-9 ">
            @section('manage-content')

            @show
        </div>
    </div>
@endsection