<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body style=" padding-top: 52px; background:#eee;">
    @php
        $user_id_cookie = Cookie::get('user_id_cookie');
        $user_name_cookie = Cookie::get('user_name_cookie');
        $user_img_cookie = Cookie::get('user_img_cookie');
    @endphp

    @if(isset($user_id_cookie))
        <div class="container-fluid">
            @include('admin.layout.header')
        </div>
        <div class="container-fluid px-0">
            <div class="d-flex">
                <div class="col-2 p-0 admin admin__menu-left admin__menu-left--bg-dark">
                    @include('admin.layout.menu-left')
                </div>
                <div class="col-10 p-0 admin admin__content ">
                    @section('admin-content')
                    
                    @show
                </div>
            </div>
        </div>
    @else
        <div class="container-fluid d-flex flex-column">
            <h1 class="font-weight-normal text-black-50 text-center mt-5">Het thoi han dang nhap</h1>
            <a href="{{route('home')}}" class="text-center">home</a>
        </div>
    @endif

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
{{--ckeditor4--}}
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script> CKEDITOR.replace('editor1', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        } ); </script>
</body>
</html>