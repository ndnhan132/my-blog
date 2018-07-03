@extends('front.layout.profile-master')
@section('profile-content')

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
    <form action="" method="post" class="mt-3 border border-primary col-6 rounded">
        <div class="form-group d-flex flex-column justify-content-center">
            <input type="password" class="form-control mt-3" name="" value="" placeholder="mat khau cu">
            <input type="password" class="form-control mt-3" name="" value="" placeholder="mat khau moi">
            <input type="password" class="form-control mt-3" name="" value="" placeholder="nhap lai mat khau">
            <button type="submit" class="btn btn-outline-primary mx-5 mt-4 mb-1" >Cap nhat</button>
        </div>

    </form>
    <div class="mt-4">
        <span class="text-uppercase p-1 text-danger">
            <i class="fas fa-exclamation-triangle"></i>
            tai khoan
        </span>
    </div>
    <div class="mt-3 border border-danger col-6 rounded">
        <form action="" method="post">
            <div class="form-group mt-4">
                <h5 class="border-bottom pb-1">Xóa tài khoản</h5>
                <p class="border-bottom py-1">Tài khoản đã xóa sẽ không thể phục hồi laị được, hãy chắc chắn trước khi xóa</p>
                <button class="btn btn-danger mx-auto">Xóa</button>
            </div>
        </form>
    </div>

@endsection