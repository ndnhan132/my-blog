@extends('front.layout.manage-master')
@section('manage-content')
    {{--@php--}}
        {{--$user_cookie = Cookie::get('user_cookie')--}}
    {{--@endphp--}}
<div class="manage__update">
    <div class="pt-4 border-bottom border-secondary rounded-bottom">
        <span class="text-uppercase p-1 text-dark">
            <i class="fas fa-pen-fancy"></i>
            Cập nhật thông tin
        </span>
    </div>
    <form class="d-flex flex-column py-4 border mt-4" action="{{route('user-update')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="put" />
        {{csrf_field()}}
        <div class="d-flex">
            <div class="col-4">
                <img src="{{$user->img}}" alt="anh dai dien" class="w-100 rounded preview">
                <input name="input_img" type="file" id="" onchange="readURL(this)">
            </div>
            <div class="col-8">
                <div class="form-group d-flex">
                    <label for="" class="col-3">Tên :</label>
                    <input type="text" class="form-control col-9 rounded-0" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-3">Ngày sinh</label>
                    <input type="date" class="form-control col-9 rounded-0" name="birthday" value="{{$user->birthday}}">
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-3">Giới tính</label>
                    <div class="form-check form-check-inline col-6 d-flex justify-content-between">
                        <input class="form-check-input" type="radio" name="gender" id="" value="male" {{
                            ($user->gender ==='0') ? 'checked' : ''}}>
                        <label class="form-check-label" for="">Male</label>
                        <input class="form-check-input" type="radio" name="gender" id="" value="female" {{($user->gender
                            ==='1')? 'checked' : ''}}>
                        <label class="form-check-label" for="">Female</label>
                        <input class="form-check-input" type="radio" name="gender" id="" value="other"{{(($user->gender !=='1') && ($user->gender !=='0')) ? 'checked' : ''}}>
                        <label class="form-check-label" for="">Other</label>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-3">email</label>
                    <input type="email" class="form-control col-9 rounded-0" name="email" value="{{$user->email}}">
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-3">Điện thoại</label>
                    <input type="text" class="form-control col-9 rounded-0" name="phone" value="{{$user->phone}}">
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-3">Địa chỉ</label>
                    <input type="text" class="form-control col-9 rounded-0" name="address" value="{{$user->address}}">
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-3">Giới thiệu bản thân</label>
                    <textarea class="form-control col-9 rounded-0" name="description" id="" cols="30"
                              rows="4">{{$user->description}}</textarea>
                </div>
            </div>
        </div>
        <div class="form-group d-flex justify-content-center mt-4">
            <button class="btn manage__btn--green rounded-0 mx-2 text-white" style="width: 80px">Update</button>
            <a href="{{URL::previous()}}" class="btn manage__btn--green rounded-0  mx-2 text-white" style="width:
                80px"
               type=""
            >Back</a>
        </div>
    </form>
</div>
@endsection