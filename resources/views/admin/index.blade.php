@extends('admin.layout.master')
@section('admin-content')

    <div class="d-flex justify-content-between border-bottom px-2 py-3 mt-3">
        @for($i= 0; $i< 4; $i++)
        <div class="d-flex w-25 bg-white border mx-2" >
            <div class="col-4 pr-0 align-content-center">
                <i class="fas fa-users fa-2x my-3 p-2 text-white bg-danger rounded-circle"></i>
            </div>
            <div class="col-8">
                <h5 class="mt-3 mb-0">
                    2345
                </h5>
                <span class="text-black-50">
                    Total user
                </span>
            </div>
        </div>
        @endfor
    </div>
    <div class="d-flex justify-content-between px-2 py-3">
        @for($i= 0; $i< 4; $i++)
            <div class="d-flex w-25 bg-white border mx-2" >
                <div class="col-4 pr-0 align-content-center">
                    <i class="fas fa-users fa-2x my-3 p-2 text-white bg-info rounded-circle"></i>
                </div>
                <div class="col-8">
                    <h5 class="mt-3 mb-0">
                        2345
                    </h5>
                    <span class="text-black-50">
                    Total user
                </span>
                </div>
            </div>
        @endfor
    </div>

    <div class="d-flex justify-content-between border px-2 py-3">
        <div class="col-4 border border-danger bg-white">
            dfsdfsd
        </div>
        <div class="col-4 border border-danger">
            dfsdfsd
        </div>
        <div class="col-4 border border-danger">
            dfsdfsd
        </div>
    </div>

@endsection
