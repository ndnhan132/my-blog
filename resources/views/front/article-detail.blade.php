@extends('front.layout.content')
@section('articles-content')
    <?php use Carbon\Carbon;?>
<div class="border">
    <div class="col-12 mt-4">
        <h4 class="text-center">
            {{$article->title}}
        </h4>
    </div>
    <div class="col-12 mt-1 d-flex justify-content-center">
        <div class=" d-flex align-items-center">
            <img width="45" height="45" class="rounded-circle" src="{{$article->user->img}}" alt="">
            <span class="text-truncate text-black-50">
                {{$article->user->name}}
            </span>
        </div>
        <div class="px-5 d-flex align-items-center">
            <span class="text-black-50">
                <i class="fas fa-glasses"></i>
                {{$article->view}}
            </span>
        </div>
        <div class=" d-flex align-items-center">
            <span class=" text-black-50">
                <i class="far fa-clock"></i>
                {{$article->created_at}}
            </span>
        </div>
    </div>
    <div class="col-12 mt-2">
        <img src="{{$article->img}}" class="px-5 w-100" alt="">
    </div>
    <div class="col-12 pt-4">
        @php
            echo $article->content
        @endphp
    </div>
</div>
<div class="border mt-4">
    <div class="col-12 d-flex flex-column">
        <span class="border-bottom ">{{count($comments)}} binh luan</span>
            <form class="col-12 d-flex align-items-center mt-2 px-0" action="{{route('post-comment', $article->id)}}" method="post">
                    <input type="hidden" name="_method" value="post" />
                    {{ csrf_field() }}
                <textarea class="col-11" name="comment" id="" cols="30" rows="2"></textarea>
                <button class="btn btn-link">
                    <i class="fas fa-check text-success" style="font-size: 40px"></i>
                </button>
            </form>
        @foreach($comments as $comment)

            <div class="d-flex align-items-start mt-4">
                <img src="{{$comment->user->img}}" alt="" class="img-fluid col-1 p-0">
                <div class="col-11 d-flex flex-column pr-2">
                    <span class="border px-3 rounded">
                        {{$comment->comment}}
                    </span>
                    <div class="d-flex mt-2">
                        <div class="col-9 text-black-50">
                            {{$comment->user->name}}
                        </div>
                        <div class="col-3 text-black-50">
                            {{Carbon::parse($comment->created_at)->diffForHumans(Carbon::now())}}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection