@extends('front.layout.manage-master')
@section('manage-content')
    <div class="manage__article-manage">
        <div class="pt-4 border-bottom border-secondary rounded-bottom">
        <span class="text-uppercase p-1 text-dark">
            <i class="fas fa-pen-fancy"></i>
            Quản lý bài viết
        </span>
        </div>
        <div>
            <ul class="list-group pt-4">
                <li class="manage__btn--green list-group-item rounded-0 d-flex list-group-item
                list-group-item-success  py-0 align-items-center">
                    <span class="text-center text-white text-uppercase">
                        Danh sách bài viết
                    </span>
                    <div class="d-flex ml-auto">
                        <form class="form-inline admin__header__search px-2" method="get" action="{{route
                        ('search-my-article')
                        }}">
                            @include('admin.layout.search-form')
                            <form action="{{route('get-add-user-article')}}" method="get">
                                <button type="submit" class="btn btn-link ml-auto">
                                    <i class="fas fa-plus-circle text-white" style="font-size: 24px"></i>
                                </button>
                            </form>
                    </div>
                </li>
                @foreach($articles as $article)
                <li class="list-group-item text-dark rounded-0 d-flex">
                    {{$article->title}}
                    <div class="d-flex ml-auto">
                        <form action="{{route('article-detail',$article->id)}}" method="get" class="    ">
                            <button class="btn btn-link rounded-0 btn-sm">
                                <i class="fas fa-angle-double-right"></i>
                            </button>
                        </form>
                        <form action="{{route('get-edit-my-article', $article->id)}}" method="get" class="" >
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