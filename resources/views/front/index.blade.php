@extends('front.layout.content')
@section('articles-content')
    <div class="d-flex flex-column px-5 home-post ">
{{--        @foreach(collect($articles)->sortBy('create_at')->reverse()->splice(0, 5) as $article)--}}
        @foreach($articles as $article)
            <div class="col-12 border px-4 pt-4 my-3 home-content__left__post">
                <img class="w-100" src="{{$article->img}}" alt="">
                <form action="{{route('article-detail',$article->id)}}" method="get">
                    <button class="btn btn-link">
                <span class=" text-uppercase text-dark pt-2 font-weight-bold text-truncate">
                    {{$article->title}}
                </span>
                    </button>
                </form>
                <span>by <a href="" class="text-uppercase">{{$article->user->name}}</a></span>
                <span >
            <time class="text-black-50">
                {{$article->created_at}}
            </time>
        </span>
                <div class=" col-6 offset-6 d-flex flex-row justify-content-around home-content__left__post__vote">
                    <button class="bg-transparent border-0 text-danger">
                        <i class="fas fa-heart"></i>
                        {{$article->like}}
                    </button>
                    <button class="bg-transparent border-0 text-primary">
                        <i class="fas fa-eye"></i>
                        {{$article->view}}
                    </button>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center my-4">
            {{$articles->links('vendor.pagination.default')}}
        </div>
    </div>

@endsection