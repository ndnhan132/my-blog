{{--register--}}
{{-- @if(session()->has('register_data'))
    @if(session()->get('register_data'))
        <div class="d-flex w-25 mx-auto bg-success justify-content-center fixed-top">
        <span class="text-white">
        dk tc
        </span>
        </div>
    @elseif(!session()->get('register_data'))
        <div class="d-flex w-25 mx-auto bg-danger justify-content-center fixed-top">
        <span class="text-white">
        dk ko tc
        </span>
        </div>
        @else
            <div></div>
    @endif
@else
    <div></div>
@endif

{{--login--}}
{{-- @if(session()->get('login_data'))
    <div class="d-flex w-25 mx-auto bg-success justify-content-center fixed-top">
        <span class="text-white">
        dang nhap tc
        </span>
    </div>
@elseif(!session()->get('login_data'))
    <div class="d-flex w-25 mx-auto bg-danger justify-content-center fixed-top">
        <span class="text-white">
        dang nhap that bai
        </span>
    </div>
    @else
    <div></div>
    @endif
@else
    <div></div>
@endif --}}

{{--login user--}}

@php
    $user_id_cookie = Cookie::get('user_id_cookie');
    $user_name_cookie = Cookie::get('user_name_cookie');
    $user_role_cookie = Cookie::get('user_role_cookie');
@endphp


<div class="d-flex flex-row mt-2 align-items-center">
    <div class="col-6 d-flex justify-content-end text-secondary p-0 text-dark h1">FUN</div>

    @if(isset($user_id_cookie))
        <div class="col-6 d-flex justify-content-end text-secondary align-items-center p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{$user_name_cookie}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if($user_role_cookie === 'admin')
                                    <form action="{{route('admin')}}" method="get">
                                        <button class="btn btn-link dropdown-item">Admin</button>
                                @else
                                    <form action="{{route('user-profile')}}" method="get">
                                        <button class="btn btn-link dropdown-item">Nguoi dung</button>
                                @endif
                                    </form>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('logout')}}" method="get">
                                        <button class="btn btn-link dropdown-item">dang xuat</button>
                                    </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    @else
        <div class="col-6 d-flex justify-content-end text-secondary align-items-center p-0">
            <form action="{{route('get-login')}}">
                <button class="btn btn-sm btn-secondary rounded-0 border-right">login</button>
            </form>
            <form action="{{route('register')}}">
                <button class="btn btn-sm btn-secondary rounded-0">register</button>
            </form>
        </div>
    @endif

</div>








{{-- Modal sign up --}}
{{--<div class="modal fade" id="register-submit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<h5 class="modal-title" id="exampleModalLabel">Sign up</h5>--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--<form class="form-horizontal" action="{{route('user-store')}}" method="post">--}}
                    {{--<input type="hidden" name="_method" value="post" />{{csrf_field()}}--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="exampleInputUsername">UserName</label>--}}
                        {{--<input type="text" class="form-control" id="register-username" name="register-username"--}}
                               {{--placeholder="Username" value="{{old('register-username')}}">--}}
                        {{--<small id="error-username" class="form-text text-danger"></small>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="exampleInputPassword1">Password</label>--}}
                        {{--<input type="password" class="form-control" id="register-password" name="register-password"--}}
                               {{--placeholder="Password">--}}
                        {{--<small id="error-pass" class="form-text text-danger"></small>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="exampleInputPassword1">Confirm Password</label>--}}
                        {{--<input type="password" class="form-control" id="register-repassword" name="register-repassword"--}}
                               {{--placeholder="Password">--}}
                        {{--<small id="error-repass" class="form-text text-danger"></small>--}}
                    {{--</div>--}}
                    {{--<button type="submit" class="btn btn-primary reg-alert">SIGN UP</button>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{-- Modal Sign in --}}
{{--<div class="modal fade" id="login-submit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<h5 class="modal-title" id="exampleModalLabel">Sign in</h5>--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--<form class="form-horizontal" action="{{route('post-user-login')}}" method="post">--}}
                    {{--<input type="hidden" name="_method" value="post" />{{csrf_field()}}--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="exampleInputUsername">UserName</label>--}}
                        {{--<input type="text" class="form-control" id="login-username" name="login-username"--}}
                               {{--placeholder="Username" value="{{old('login-username')}}">--}}
                        {{--<small id="login-user-alert" class="form-text text-muted"></small>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="exampleInputPassword1">Password</label>--}}
                        {{--<input type="password" class="form-control" id="login-password" name="login-password"--}}
                               {{--placeholder="Password">--}}
                        {{--<small id="login-pass-alert" class="form-text text-muted"></small>--}}
                    {{--</div>--}}
                    {{--<div class="form-group form-check">--}}
                        {{--<input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
                        {{--<label class="form-check-label" for="exampleCheck1">Remenber Me</label>--}}
                    {{--</div>--}}
                    {{--<button type="submit" class="btn btn-primary login-alert">SIGN IN</button>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

