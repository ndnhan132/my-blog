<div class="home-content__right__topview__caption mt-3">
    <span class="text-uppercase p-1">
        <i class="fas fa-bookmark"></i>
        pho bien nhat
    </span>
</div>
<ul class="home-content__right__topview__list p-1 d-flex flex-column">
    @for($i=1; $i<=10; $i++)
    <li class="d-flex border-bottom border-light rounded mt-2">
        <div class="col-2  d-flex p-0 justify-content-center align-items-center">
            <span class="text-center w-100 m-2 border home-content__right__topview__list--bgyellow">
                {{$i}}
            </span>
        </div>
        <div class="col-10 px-1 py-0 m-0 d-flex flex-column">
            <a href="" class="text-uppercase text-white mb-0">
                che do dinh duong tot nhat cho tre nho
            </a>
            <i class="text-white">
                Luot xem: 1234
            </i>
        </div>
    </li>
    @endfor
</ul>


<a href="http://localhost:6789/manage/account"> account</a>
<a href="http://localhost:6789/manage/profile"> profile</a>
<a href="http://localhost:6789/manage/update"> update</a>
<a href="http://localhost:6789/manage/article/new"> new</a>
<a href="http://localhost:6789/manage/article/manage">manage</a>
<a href="http://localhost:6789/manage/article/info"> info</a>