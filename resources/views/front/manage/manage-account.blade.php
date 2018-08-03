@extends('front.layout.manage-master')
@section('manage-content')
<div class="manage__account">
    <div class="pt-4 border-bottom border-secondary rounded-bottom">
        <span class="text-uppercase p-1 text-dark">
            <i class="fas fa-wrench"></i>
            Quan ly tai khoan
        </span>
    </div>
    <div class="mt-4">
        <span class="text-uppercase p-1 text-primary">
            <i class="fas fa-key"></i>
            Thay doi mat khau
        </span>
    </div>
    <form action="{{route('user-password-update', Cookie::get('user_id_cookie'))}}" method="post" class="mt-3 border border-primary col-6 rounded">
        <input type="hidden" name="_method" value="put" />
        {{csrf_field()}}
        <div class="form-group d-flex flex-column justify-content-center">
            <input type="password" class="form-control mt-3" name="old-password" value="" placeholder="mat khau cu">
            <input type="password" class="form-control mt-3" name="new-password" value="" placeholder="mat khau moi">
            <input type="password" class="form-control mt-3" name="renew-password" value="" placeholder="nhap lai mat
            khau">
            <button type="submit" class="btn btn-outline-primary mx-5 mt-4 mb-1 rounded-0" >Cap nhat</button>
        </div>

    </form>
    <div class="mt-4">
        <span class="text-uppercase p-1 text-danger">
            <i class="fas fa-exclamation-triangle"></i>
            tai khoan
        </span>
    </div>
    <div class="mt-3 border border-danger col-6 rounded">
        <form action="{{route('user-account-delete', Cookie::get('user_id_cookie'))}}" method="post">
            <input type="hidden" name="_method" value="delete" />
            {{csrf_field()}}
            <div class="form-group mt-4">
                <h5 class="border-bottom pb-1">Xóa tài khoản</h5>
                <p class="border-bottom py-1">Tài khoản đã xóa sẽ không thể phục hồi laị được, hãy chắc chắn trước khi xóa</p>
                <button class="btn btn-danger rounded-0 mx-auto">Xóa</button>
            </div>
        </form>
    </div>
</div>
@endsection