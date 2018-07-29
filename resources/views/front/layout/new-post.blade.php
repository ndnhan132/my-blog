<div class="home-content__right__newpost__caption mt-3">
    <span class="text-uppercase p-1">
        <i class="fas fa-bookmark"></i>
        Moi nhat
    </span>
</div>
<div id="carouselExampleSlidesOnly" class="carousel slide my-3" data-ride="carousel">
    <div class="carousel-inner">
        @foreach(collect($articles)->sortBy('create_at')->reverse()->splice(0, 5) as $key => $article)
        <div class="carousel-item newpost__item {{$key === 0 ? 'active' : ''}}">
            <img class="d-block w-100" src="{{$article->img}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block fixed-bottom home-content__right__newpost--transparent py-2 px-3">
                <form action="{{route('article-detail',$article->id)}}" method="g">
                    {{--<input type="hidden" name="_method" value="post" /> {{csrf_field()}}--}}
                    <button class="text-truncate btn btn-link text-white px-0">{{$key+1 . ' - ' .
                    $article->title}}</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>