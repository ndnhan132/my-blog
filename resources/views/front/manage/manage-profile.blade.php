@extends('front.layout.manage-master')
@section('manage-content')
    @php
        $user_cookie = Cookie::get('user_cookie')
    @endphp
    <div class="manage-profile">
        <div class="pt-4 border-bottom border-secondary rounded-bottom">
                <span class="text-uppercase p-1 text-dark">
                    <i class="fas fa-address-card"></i>
                    Thong tin tai khoan
                </span>
        </div>
        <div class="d-flex pt-2">
            <div class="col-4 border">
                <img class="img-fluid mt-3 border w-100"  src="{{$user_cookie->img}}" alt="">
                <form action="">
                    <input class="btn" type="file" />
                </form>
            </div>
            <div class="col-8">
                <ul>
                    <li class="border-bottom d-flex">
                        <span class="col-4 text-black-50 border-right">Ho ten :</span>
                        <span class="col-8 text-dark font-weight-bold">{{$user_cookie->name}}</span>
                    </li>
                    <li class="border-bottom d-flex">
                        <span class="col-4 text-black-50 border-right">User name :</span>
                        <span class="col-8 text-dark font-weight-bold">{{$user_cookie->username}}</span>
                    </li>
                    <li class="border-bottom d-flex">
                        <span class="col-4 text-black-50 border-right">Email :</span>
                        <span class="col-8 text-dark font-weight-bold">{{$user_cookie->email}}</span>
                    </li>
                    <li class="border-bottom d-flex">
                        <span class="col-4 text-black-50 border-right">Gender :</span>
                        <span class="col-8 text-dark font-weight-bold">
                            {{ ($user_cookie->gender === '1') ? "Nam" : ($user_cookie->gender === '1') ? "Nu" : ""}}
                        </span>
                    </li>
                    <li class="border-bottom d-flex">
                        <span class="col-4 text-black-50 border-right">Birth day:</span>
                        <span class="col-8 text-dark font-weight-bold">{{$user_cookie->birthday}}</span>
                    </li>
                    <li class="border-bottom d-flex">
                        <span class="col-4 text-black-50 border-right">Phone :</span>
                        <span class="col-8 text-dark font-weight-bold">{{$user_cookie->phone}}</span>
                    </li>
                    <li class="border-bottom d-flex">
                        <span class="col-4 text-black-50 border-right">Address:</span>
                        <span class="col-8 text-dark font-weight-bold">{{$user_cookie->address}}</span>
                    </li>
                    <li class=" d-flex">
                        <span class="col-4 text-black-50 border-right">mo ta:</span>
                        <textarea class="col-8 text-dark font-weight-bold">{{$user_cookie->description}}</textarea>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection