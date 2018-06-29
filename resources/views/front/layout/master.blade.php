<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
<div class="container">
    <div class="test1 mt-5 p-5 shadow rounded">
        <!-- header -->
        <div class="test2 shadow" style="height: 75px; ">
            header
        </div>
        <!-- menu -->
        <div class="test2 shadow" style="height: 75px; ">
            menu bar
        </div>
        <!-- content -->
        <div class="d-flex">
            <div class="col-9 test2" style="height: 750px; ">
                content
            </div>
            <div class="col-3 test2" >
                <div class=" mt-2 d-flex flex-column test1 rounded">
                    <div class="test3">
                        @include('front.layout.new-post')
                    </div>
                    <div class="test3 mt-2" style="height: 200px;">
                        HOT
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="test2 shadow" style="height: 75px; ">
            footer
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>