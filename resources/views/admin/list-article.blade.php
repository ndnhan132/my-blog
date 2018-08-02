@extends('admin.layout.master')
@section('admin-content')
    <div class="">
        <div>
            <ul class="list-group p-5">
                <li class="d-flex list-group-item list-group-item-success rounded-0 py-0 align-items-center">
                    <span class="text-center text-dark text-uppercase">
                        Danh sach bai viet
                    </span>
                    <div class="d-flex ml-auto">
                        <form class="form-inline admin__header__search px-2" method="get" action="{{route('search-article')
                        }}">
                        @include('admin.layout.search-form')
                        <button type="button" class="btn btn-link ml-auto">
                            <i class="fas fa-plus-circle" style="font-size: 24px"></i>
                        </button>
                    </div>
                </li>
                @php
                    $count=0;
                @endphp
                @foreach($articles as $article)
                    <li class="list-group-item text-dark rounded-0 d-flex justify-content-between">
                        <span class="border-right" style="width: 40px">
                            {{++$count}}
                        </span>
                        <span class="col-8 border-right">
                            {{$article->title}}
                        </span>
                        <span class="col-2 border-right">
                            {{$article->user->name}}
                        </span>

                        <div class=" d-flex ml-auto align-content-center">
                            {{-- <form action="" method="get" class="px-2">
                                <button class="btn btn-primary rounded-0 btn-sm">
                                    <i class="fas fa-angle-double-right"></i>
                                </button>
                            </form> --}}
                            {{--<form action=""method="" class="px-2">--}}
                                {{--<button class="btn btn-info rounded-0 btn-sm">--}}
                                    {{--<i class="far fa-edit"></i>--}}
                                {{--</button>--}}
                            {{--</form>--}}
                            <form action="{{route('article-delete', $article->id)}}" method="post" class="px-2">
                                <input type="hidden" name="_method" value="delete"/> {{csrf_field()}}
                                <button class="btn btn-danger rounded-0 btn-sm"}}>
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
