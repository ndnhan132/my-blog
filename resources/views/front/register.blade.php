@extends('front.layout.login-master')
@section('form-content')
    <form action="{{route('home')}}" method="get" class="mt-5">
        <button class="btn btn-link">
            <i class="fas fa-home fa-5x"></i>
            <span class="sr-only">(current)</span>
        </button>
    </form>
    <form class="form-signin" class="form-horizontal" action="{{route('user-store')}}" method="post">
        <input type="hidden" name="_method" value="post" />
        {{ csrf_field() }}
        <h1 class="h3 mb-3 font-weight-normal">Please register</h1>
        <label for="inputEmail" class="sr-only">User name</label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="User name" required
               autofocus
               value="{{old('username')}}">

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control my-3" placeholder="Password"
               required >

        <label for="inputPassword" class="sr-only">Confirm Password</label>
        <input type="password" name="repassword" id="inputPassword" class="form-control" placeholder="Confirm Password"
               required >

        <button class="btn btn-lg btn-primary btn-block my-3" type="submit">Register</button>
    </form>
    <form action="{{route('get-login')}}" method="get">
        <button class="btn btn-link text-dark">Login</button>
    </form>
    <p class="mt-3 mb-3 text-muted">&copy; 2017-2018</p>
@endsection