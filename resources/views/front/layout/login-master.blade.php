<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
<div class="container">
    {{--register--}}
    @if(session()->has('register_data'))
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
    @if(session()->has('login_data'))
        @if(session()->get('login_data'))
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
    @endif

    {{--login user--}}

    <form action="{{route('home')}}" method="get">
        <button class="btn btn-info">Home
            <span class="sr-only">(current)</span>
        </button>
    </form>
    <div class="mx-auto col-4 bg-success">
        @section('form-content')

        @show
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>
</html>