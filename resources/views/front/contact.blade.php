@extends('front.layout.master')
@section('content')
<div class="d-flex home-content">
    <div class="col-9 home-content__left">
        <h2 class="text-center font-weight-bold">BẢN QUYỀN – LIÊN HỆ</h2><br> 
        <p class="text-justify">Toàn bộ nội dung bài và hình ảnh của blog (trừ nội dung có nguồn trích dẫn) đều thuộc bản quyền của <em>FUN BLOG.</em></p> 
        <p class="text-justify">Mọi nguồn tin trích đăng bài viết cần nêu rõ tên blog (funblog.com), tên tác giả và kèm link gốc của bài viết. Trích dẫn quá 25% toàn văn bài viết là không được phép, trừ trường hợp có sự đồng ý của tác giả.</p>        
        <p class="text-justify">Mọi vấn đề liên quan đến việc sao chép, đăng tải, sử dụng bài viết, cũng như trao đổi, cộng tác, xin vui lòng liên hệ tại địa chỉ email: contact@funblog.com.</p> 
        <p class="text-justify">Xin cảm ơn.</p>
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