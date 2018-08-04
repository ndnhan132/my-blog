@extends('front.layout.content')
@section('articles-content')
    <div class="d-flex flex-column px-5 home-post ">
        @foreach($articles as $article)
            <div class="col-12 border px-4 pt-4 my-3 home-content__left__post pb-4">
                <img class="w-100" src="{{$article->img}}" alt="">
                <form action="{{route('article-detail',$article->id)}}" method="get" class="d-flex">
                    <button class="btn btn-link px-0 pt-2 w-100 text-left text-uppercase text-dark font-weight-bold
                    text-truncate">
                            {{$article->title}}
                    </button>
                </form>
                <div class="d-flex">
                    <span class="text-black-50 col-7 pl-0">
                        by <a href="" class="text-uppercase">{{$article->user->name}}</a>
                    </span>
                    <span class="col-3">
                        <time class="text-black-50">
                            {{$article->created_at}}
                        </time>
                    </span>
                    <div class=" col-2 d-flex flex-row justify-content">
                        <button class="bg-transparent border-0 text-primary">
                            <i class="fas fa-eye"></i>
                            {{$article->view}}
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="d-flex justify-content-center my-4">
            {{$articles->links('vendor.pagination.default')}}
        </div>
    </div>

@endsection