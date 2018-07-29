@extends('front.layout.master')
@section('content')
<div class="d-flex home-content">
    <div class="col-9 home-content__left">
        @section('articles-content')
        @show
    </div>
    {{-- hot, new --}}
    <div class="col-3 home-content__right pr-0" >
        <div class="border col-12 home-content__right__newpost home-content__right--dark">
            @include('front.layout.new-post')
        </div>
        <div class="border col-12 mt-2 home-content__right__topview home-content__right--dark">
            @include('front.layout.top-view')
        </div>
    </div>
</div>
@endsection