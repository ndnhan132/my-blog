<div class="topview__caption">
    <span class="text-uppercase p-1">
        <i class="fas fa-bookmark"></i>
        pho bien nhat
    </span>
</div>
<ul class="topview__list p-1 d-flex flex-column">
    @for($i=1; $i<=10; $i++)
    <li class="d-flex border-bottom border-light rounded mt-2">
        <div class="col-2 rank d-flex p-0 justify-content-center align-items-center">
            <span class="text-center w-100 m-2 border">
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