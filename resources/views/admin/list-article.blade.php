@extends('admin.layout.master')
@section('admin-content')
    <div class="">
        <div>
            <ul class="list-group p-5">
                <li class="d-flex list-group-item list-group-item-success rounded-0 py-0 align-items-center">
                    <span class="text-center text-dark text-uppercase">
                        Danh sách bài viết
                    </span>
                    <div class="d-flex ml-auto">
                        <form class="form-inline admin__header__search px-2" method="get" action="{{route('search-article')
                        }}">
                        @include('admin.layout.search-form')
                        <form action="{{route('get-add-new-article')}}" method="get">
                            <button type="submit" class="btn btn-link ml-auto">
                                <i class="fas fa-plus-circle" style="font-size: 24px"></i>
                            </button>
                        </form>
                    </div>
                </li>
                @php
                    $count=0;
                @endphp
                @foreach($articles as $article)
                    <li class="list-group-item text-dark rounded-0 d-flex justify-content-between">
                        <span class="border-right" style="width: 35px">
                            {{++$count}}
                        </span>
                        <span class="col-6 border-right">
                            {{$article->title}}
                        </span>
                        <span class="col-3 border-right">
                            {{$article->user->name}}
                        </span>
                        <span class="d-flex justify-content-md-around" >
                            <i class="fas fa-eye text-secondary px-3"></i>
                            {{$article->view}}
                        </span>

                        <div class=" d-flex ml-auto align-content-center">
                            <form action="{{route('article-detail',$article->id)}}" method="get" class="    ">
                                <button class="btn btn-link rounded-0 btn-sm">
                                    <i class="fas fa-angle-double-right"></i>
                                </button>
                            </form>
                            <form action="{{route('get-edit-article', $article->id)}}" method="get" class="" >
                                <button class="btn btn-link rounded-0 btn-sm" {{ ($article->user->id !==  Cookie::get('user_id_cookie')) ? 'disabled' : '' }}>
                                    <i class="far fa-edit"></i>
                                </button>
                            </form>
                            <form action="{{route('article-delete', $article->id)}}" method="post" class="">
                                <input type="hidden" name="_method" value="delete"/> {{csrf_field()}}
                                <button class="btn btn-link rounded-0 btn-sm"}}>
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
