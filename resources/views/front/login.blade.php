@extends('front.layout.login-master')
@section('form-content')

    <form action="{{route('home')}}" method="get" class="mt-5">
        <button class="btn btn-link">
            <i class="fas fa-home fa-5x"></i>
            <span class="sr-only">(current)</span>
        </button>
    </form>
    <form class="form-signin" class="form-horizontal" action="{{route('post-login')}}" method="post">
        <input type="hidden" name="_method" value="post" />
        {{ csrf_field() }}
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">User name</label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="User name" required
               autofocus
               value="{{old('username')}}">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control mt-3" placeholder="Password"
               required >
        {{--<div class="checkbox mb-3">--}}
            {{--<label>--}}
                {{--<input type="checkbox" value="remember-me"> Remember me--}}
            {{--</label>--}}
        {{--</div>--}}
        <button class="btn btn-lg btn-primary btn-block my-3" type="submit">Sign in</button>
    </form>
    <form action="{{route('register')}}" method="get">
        <button class="btn btn-link text-dark">Register</button>
    </form>
    <p class="mt-3 mb-3 text-muted">&copy; 2017-2018</p>
@endsection