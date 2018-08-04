@extends('front.layout.manage-master')
@section('manage-content')
    <div class="manage__article-info">
        <div class="pt-4 border-bottom border-secondary rounded-bottom">
        <span class="text-uppercase p-1 text-dark">
            <i class="fas fa-pen-fancy"></i>
            thong tin tac gia
        </span>
        </div>
        <div class="d-flex pt-2 border m-4">
            <div class="col-4 ">
                <img class="img-fluid my-3 border" src="{{asset('img/avatar.jpg')}}" alt="">
            </div>
            <div class="col-8">
                <ul class=" mt-2">
                    <li>Tac gia: </li>
                    <li>So bai viet:12</li>
                    <li>Tong so luot xem: 12323</li>
                    <li>Ua thich: 123123</li>
                    <li>Binh <luan></luan>: 123123</li>
                </ul>
            </div>
        </div>
        <div>
            
        </div>
    </div>
@endsection 