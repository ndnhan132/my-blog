<div class="d-flex flex-column px-5 home-post ">
    @foreach($articles as $article)
    <div class="col-12 d-flex flex-column border px-4 pt-4 my-3 home-content__left__post">
        <img class="img-fluid" src="{{$article->img}}" alt="">
        <a href="" class="text-uppercase text-dark pt-2 font-weight-bold">
            {{$article->title}}
        </a>
        <span>by <a href="" class="text-uppercase">internet</a></span>
        <span >
            <time class="text-black-50">
                {{$article->created_at}}
            </time>
        </span>
        <div class=" col-6 offset-6 d-flex flex-row justify-content-around home-content__left__post__vote">
            <button class="bg-transparent border-0 text-danger">
                <i class="fas fa-heart"></i>
                2000
            </button>
            <button class="bg-transparent border-0 text-secondary">
                <i class="fas fa-thumbs-down"></i>
                212
            </button>
            <button class="bg-transparent border-0 text-primary">
                <i class="fas fa-eye"></i>
                22222
            </button>
            <button class="bg-transparent border-0 text-warning">
                <i class="far fa-flag"></i>
                23
            </button>
        </div>
    </div>
    @endforeach
</div>