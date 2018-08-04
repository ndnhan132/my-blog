@extends('admin.layout.master')
@section('admin-content')

    <div class="d-flex flex-column border-bottom px-2 py-4 mt-4">
        <span class="px-2 h4">
            Total
        </span>
        <div class="d-flex justify-content-between">
            <div class="d-flex w-25 bg-white border mx-2" >
                <div class="col-4 pr-0 align-content-center">
                    <i class="fas fa-users fa-2x my-3 p-2 text-white bg-danger rounded-circle"></i>
                </div>
                <div class="col-8">
                    <h5 class="mt-3 mb-0">
                        {{$allUsers->count()}}
                    </h5>
                    <span class="text-black-50">
                        User
                        </span>
                </div>
            </div>

            <div class="d-flex w-25 bg-white border mx-2" >
                <div class="col-4 pr-0 align-content-center">
                    <i class="fas fa-newspaper fa-2x my-3 p-2 text-white bg-danger rounded-circle"></i>
                </div>
                <div class="col-8">
                    <h5 class="mt-3 mb-0">
                        {{$allArticles->count()}}
                    </h5>
                    <span class="text-black-50">
                        Articles
                        </span>
                </div>
            </div>

            <div class="d-flex w-25 bg-white border mx-2" >
                <div class="col-4 pr-0 align-content-center">
                    <i class="fas fa-pen-alt fa-2x my-3 p-2 text-white bg-danger rounded-circle"></i>
                </div>
                <div class="col-8">
                    <h5 class="mt-3 mb-0">
                        @php
                            $author= 0;
                        @endphp
                        @foreach ($allUsers as $user)
                            @if($user->roles->first()['name']=== 'author')
                                @php
                                    $author++
                                @endphp
                            @endif
                        @endforeach
                        {{$author}}
                    </h5>
                    <span class="text-black-50">
                        Author
                    </span>
                </div>
            </div>

            <div class="d-flex w-25 bg-white border mx-2" >
                <div class="col-4 pr-0 align-content-center">
                    <i class="fas fa-users fa-2x my-3 p-2 text-white bg-danger rounded-circle"></i>
                </div>
                <div class="col-8">
                    <h5 class="mt-3 mb-0">
                        2345
                    </h5>
                    <span class="text-black-50">
                        User
                        </span>
                </div>
            </div>
        </div>
    </div>



    <div class="px-2 py-4">
        <span class="px-2 h4">
            Week
        </span>
        <div class="d-flex justify-content-between mt-2">
            <div class="d-flex w-25 bg-white border mx-2" >
                <div class="col-4 pr-0 align-content-center">
                    <i class="fas fa-users fa-2x my-3 p-2 text-white bg-danger rounded-circle"></i>
                </div>
                <div class="col-8">
                    <h5 class="mt-3 mb-0">
                        2345
                    </h5>
                    <span class="text-black-50">
                        User
                        </span>
                </div>
            </div>

            <div class="d-flex w-25 bg-white border mx-2" >
                <div class="col-4 pr-0 align-content-center">
                    <i class="fas fa-users fa-2x my-3 p-2 text-white bg-danger rounded-circle"></i>
                </div>
                <div class="col-8">
                    <h5 class="mt-3 mb-0">
                        2345
                    </h5>
                    <span class="text-black-50">
                        User
                        </span>
                </div>
            </div>

            <div class="d-flex w-25 bg-white border mx-2" >
                <div class="col-4 pr-0 align-content-center">
                    <i class="fas fa-users fa-2x my-3 p-2 text-white bg-danger rounded-circle"></i>
                </div>
                <div class="col-8">
                    <h5 class="mt-3 mb-0">
                        2345
                    </h5>
                    <span class="text-black-50">
                        User
                        </span>
                </div>
            </div>

            <div class="d-flex w-25 bg-white border mx-2" >
                <div class="col-4 pr-0 align-content-center">
                    <i class="fas fa-users fa-2x my-3 p-2 text-white bg-danger rounded-circle"></i>
                </div>
                <div class="col-8">
                    <h5 class="mt-3 mb-0">
                        2345
                    </h5>
                    <span class="text-black-50">
                        User
                        </span>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
