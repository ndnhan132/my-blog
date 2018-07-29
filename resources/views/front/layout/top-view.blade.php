<div class="home-content__right__topview__caption mt-3">
    <span class="text-uppercase p-1">
        <i class="fas fa-bookmark"></i>
        pho bien nhat
    </span>
</div>
<ul class="home-content__right__topview__list p-1 d-flex flex-column">
    <?php
        $count= 0;
    ?>
    @foreach(collect($articles)->sortBy('view')->reverse()->splice(0,10) as $article)

    <li class="d-flex border-bottom border-light rounded mt-0">
        <div class="col-2  d-flex p-0 justify-content-center align-items-center">
            <span class="text-center w-100 m-2 border home-content__right__topview__list--bgyellow">
                {{++$count}}
            </span>
        </div>
        <div class="col-10 px-1 py-0 m-0 d-flex flex-column">
            <form action="{{route('article-detail',$article->id)}}" method="get">
                {{--<input type="hidden" name="_method" value="post" /> {{csrf_field()}}--}}
                <button class="mt-1 text-uppercase text-white mb-0 text-truncate btn btn-link">
                        <span>
                            {{$article->title}}
                        </span>
                </button>
            </form>
            <i class="text-white">
                View : {{$article->view}}
            </i>
        </div>
    </li>
    @endforeach
</ul>


<a href="http://localhost:6789/manage/account"> account</a>
<a href="http://localhost:6789/manage/profile"> profile</a>
<a href="http://localhost:6789/manage/update"> update</a>
<a href="http://localhost:6789/manage/article/new"> new</a>
<a href="http://localhost:6789/manage/article/manage">manage</a>
<a href="http://localhost:6789/manage/article/info"> info</a>