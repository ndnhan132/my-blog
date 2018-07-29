@extends('front.layout.manage-master')
@section('manage-content')
    @php
        $user_cookie = Cookie::get('user_cookie')
    @endphp
<div class="manage__update">
    <div class="pt-4 border-bottom border-secondary rounded-bottom">
        <span class="text-uppercase p-1 text-dark">
            <i class="fas fa-pen-fancy"></i>
            Cap nhat thong tin
        </span>
    </div>
    <div class="col-10 offset-1 border mt-4">
        {{--<form class="d-flex flex-column py-4">--}}
        <form class="d-flex flex-column py-4" action="{{route('user-update')}}" method="post">
            <input type="hidden" name="_method" value="put" />
            {{csrf_field()}}
            <div class="form-group d-flex">
                <label for="" class="col-3">ho va ten</label>
                <input type="text" class="form-control col-9 rounded-0" name="name" value="{{$user_cookie->name}}">
            </div>
            <div class="form-group d-flex">
                <label for="" class="col-3">ngay sinh</label>
                <input type="date" class="form-control col-9 rounded-0" name="birthday" value="{{$user_cookie->birthday}}">
            </div>
            <div class="form-group d-flex">
                <label for="" class="col-3">Gioi tinh</label>
                <div class="form-check form-check-inline col-6 d-flex justify-content-between">
                    <input class="form-check-input" type="radio" name="gender" id="" value="male" {{
                    ($user_cookie->gender ==='1') ? 'checked' : ''}}>
                    <label class="form-check-label" for="">Male</label>
                    <input class="form-check-input" type="radio" name="gender" id="" value="female" {{($user_cookie->gender ==='0')? 'checked' : ''}}--}}>
                    <label class="form-check-label" for="">Female</label>
                    <input class="form-check-input" type="radio" name="gender" id="" value="other"{{(($user_cookie->gender !=='1') && ($user_cookie->gender !=='0')) ? 'checked' : ''}}>
                    <label class="form-check-label" for="">Other</label>
                </div>
            </div>
            <div class="form-group d-flex">
                <label for="" class="col-3">email</label>
                <input type="email" class="form-control col-9 rounded-0" name="email" value="{{$user_cookie->email}}">
            </div>
            <div class="form-group d-flex">
                <label for="" class="col-3">Sdt</label>
                <input type="text" class="form-control col-9 rounded-0" name="phone" value="{{$user_cookie->phone}}">
            </div>
            <div class="form-group d-flex">
                <label for="" class="col-3">dia chi</label>
                <input type="text" class="form-control col-9 rounded-0" name="address" value="{{$user_cookie->address}}">
            </div>
            <div class="form-group d-flex">
                <label for="" class="col-3">Gioi thieu ban than</label>
                <textarea class="form-control col-9 rounded-0" name="description" id="" cols="30"
                          rows="4">{{$user_cookie->description}}</textarea>
            </div>
            <div class="form-group d-flex justify-content-center mt-4">
                    <button class="btn manage__btn--green rounded-0 mx-2 text-white" style="width: 80px">Update</button>
                {{--<button class="btn manage__btn--green rounded-0  mx-2 text-white" style="width: 80px" type="" >Back</button>--}}
            </div>
        </form>
    </div>
</div>
@endsection