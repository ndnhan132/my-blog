@extends('front.layout.master')
@section('content')
<div class="d-flex home-content">
    <div class="col-9 home-content__left">
        <h2 class="text-center font-weight-bold">GIỚI THIỆU</h2><br> 
        <h4 class="text-center font-italic">Cám ơn bạn đã ghé thăm blog FUN! Hãy để tôi làm quen với bạn bằng câu chuyện của tôi và của blog.</h4>
        <p class="font-weight-bold">1. Về tôi:</p>
        <p class="text-justify">Xin chào, tên tôi là Katie. Tôi là một bà mẹ trẻ sinh năm 1991. Tôi đã, đang trong hành trình tìm hiểu bản thân và học hỏi những kiến thức mới mỗi ngày.
                Tôi sinh ra và lớn lên ở Đà Nẵng – thanh phố biển và những cây cầu bắc qua dòng song Hàn xinh đẹp.</p>
        <p class="font-weight-bold">2. Về FUN:</p>     
        <p class="text-justify">Tự nhận thấy mình có nhu cầu được chia sẻ những gì mình đọc được, biết được, hòa cùng không khí “social network” rầm rộ hiện nay nhưng bản thân lại không muốn dung Facebook mà chỉ xem facebook như một công cụ để thu nạp tin tức và những điều mới mẻ. Hy vọng blog của tụi mình sẽ góp phần nhỏ vào cộng đồng BLOG hiện nay.</p>
            
        <p class="text-justify">Vì sao mình chọn tên FUN? Mình vừa học ra một điều là mình sinh ra để hạnh phúc, để được vui vẻ. Vừa nhận ra thôi à? Đúng rồi, chỉ vừa nhận ra. Trước giờ từ lúc sinh ra đến lớn lên đều làm những điều mà ba mẹ muốn, xã hội đều làm như một nghĩa vụ phải hoàn thanh. Vì vậy quyết định là tự bây giờ sống để vui, làm gì mình thích theo 1 bản năng. FUN sẽ là nơi mình nói về những trải nghiệm của tụi mình trong quá trình làm cho chính bản thân tụi mình hạnh phúc. :D</p>
                
        <p class="text-justify">Vì mình là một bà mẹ trẻ nên một trong những điều mình thực sự mong muốn học hỏi là kiến thức nuôi dạy con. Mình sẽ đọc, học nhiều và chia sẻ những kiến thức đó lên blog này. Cái chính là để mình có động lực học mỗi ngày.</p>
                
        <p class="text-justify">Hãy theo dõi FUN blog và hành trình làm vui cuộc sống của tụi mình nhé. </p>
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