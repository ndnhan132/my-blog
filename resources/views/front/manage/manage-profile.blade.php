@extends('front.layout.manage-master')
@section('manage-content')
    <div class="manage-profile">
        <div class="pt-4 border-bottom border-secondary rounded-bottom">
                <span class="text-uppercase p-1 text-dark">
                    <i class="fas fa-address-card"></i>
                    Thông tin tài khoản
                </span>
        </div>
        <div class="d-flex pt-2">
            <div class="col-4 border">
                <img class="img-fluid mt-3 border w-100"  src="{{$user->img}}" alt=" chua cap nhat hinh anh dai dien">
            </div>
            <div class="col-8">
                <ul>
                    <li class="border-bottom d-flex">
                        <span class="col-4 text-black-50 border-right">Tên :</span>
                        <span class="col-8 text-dark font-weight-bold">{{$user->name}}</span>
                    </li>
                    <li class="border-bottom d-flex">
                        <span class="col-4 text-black-50 border-right">User name :</span>
                        <span class="col-8 text-dark font-weight-bold">{{$user->username}}</span>
                    </li>
                    <li class="border-bottom d-flex">
                        <span class="col-4 text-black-50 border-right">Email :</span>
                        <span class="col-8 text-dark font-weight-bold">{{$user->email}}</span>
                    </li>
                    <li class="border-bottom d-flex">
                        <span class="col-4 text-black-50 border-right">Giới tính :</span>
                        <span class="col-8 text-dark font-weight-bold">
                            {{ ($user->gender === '0') ? "Nam": ""}}
                            {{ ($user->gender === '1') ? "Nu": ""}}
                            {{ ($user->gender !== '0' && $user->gender !== '1') ? "Other": ""}}
                        </span>
                    </li>
                    <li class="border-bottom d-flex">
                        <span class="col-4 text-black-50 border-right">Ngày sinh :</span>
                        <span class="col-8 text-dark font-weight-bold">{{$user->birthday}}</span>
                    </li>
                    <li class="border-bottom d-flex">
                        <span class="col-4 text-black-50 border-right">Điên thoại :</span>
                        <span class="col-8 text-dark font-weight-bold">{{$user->phone}}</span>
                    </li>
                    <li class="border-bottom d-flex">
                        <span class="col-4 text-black-50 border-right">Địa chỉ:</span>
                        <span class="col-8 text-dark font-weight-bold">{{$user->address}}</span>
                    </li>
                    <li class=" d-flex">
                        <span class="col-4 text-black-50 border-right">Mô tả:</span>
                        <textarea class="col-8 text-dark font-italic" rows="5">{{$user->description}}</textarea>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection