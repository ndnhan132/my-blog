@extends('front.layout.manage-master')
@section('manage-content')
    <div class="manage__article-manage">
        <div class="pt-4 border-bottom border-secondary rounded-bottom">
        <span class="text-uppercase p-1 text-dark">
            <i class="fas fa-pen-fancy"></i>
            quan ly bai viet
        </span>
        </div>
        <div>
            <ul class="list-group pt-4">
                <li class="text-center text-white text-uppercase manage__btn--green list-group-item list-group-item-secondary rounded-0">Danh sach bai viet</li>
                @for ($i = 0; $i<10 ; $i++)
                <li class="list-group-item text-dark rounded-0 d-flex">
                    Che do dinh duong tot nhat cho tre nho
                    <div class="d-flex ml-auto">
                        <form action=""method="" class="px-2">
                            <button class="btn btn-primary rounded-0 btn-sm">
                                <i class="fas fa-angle-double-right"></i>
                            </button>
                        </form>
                        <form action=""method="" class="px-2">
                            <button class="btn btn-info rounded-0 btn-sm">
                                <i class="far fa-edit"></i>
                            </button>
                        </form>
                        <form action=""method="" class="px-2">
                            <button class="btn btn-danger rounded-0 btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </li>
                @endfor
            </ul>
        </div>
    </div>
@endsection 