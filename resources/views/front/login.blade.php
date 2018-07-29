@extends('front.layout.login-master')
@section('form-content')
    <div class="">
        <form class="form-horizontal" action="{{route('post-login')}}" method="post">
            <input type="hidden" name="_method" value="post" />{{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputUsername">UserName</label>
                <input type="text" class="form-control" id="login-username" name="login-username"
                       placeholder="Username" value="{{old('login-username')}}">
                <small id="login-user-alert" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="login-password" name="login-password"
                       placeholder="Password" value="123">
                <small id="login-pass-alert" class="form-text text-muted"></small>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remenber Me</label>
            </div>
            <button type="submit" class="btn btn-primary login-alert">SIGN IN</button>
        </form>
        <form action="{{route('register')}}">
            <button class="btn btn-link text-white">register</button>
        </form>
    </div>
@endsection