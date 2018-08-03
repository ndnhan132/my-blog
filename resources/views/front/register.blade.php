@extends('front.layout.login-master')
@section('form-content')
<div class="">
    <form class="form-horizontal" action="{{route('user-store')}}" method="post">
        <input type="hidden" name="_method" value="post" />{{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputUsername">UserName</label>
            <input type="text" class="form-control" id="register-username" name="username"
                   placeholder="Username" value="{{old('username')}}">
            <small id="error-username" class="form-text text-danger"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="register-password" name="password"
                   placeholder="Password" value="123">
            <small id="error-pass" class="form-text text-danger"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input type="password" class="form-control" id="register-repassword" name="repassword"
                   placeholder="Password">
            <small id="error-repass" class="form-text text-danger"></small>
        </div>
        <button type="submit" class="btn btn-primary reg-alert">SIGN UP</button>
    </form>
    <form action="{{route('get-login')}}">
        <button class="btn btn-link text-white">login</button>
    </form>
</div>
</div>
@endsection