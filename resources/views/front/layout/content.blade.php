
<div class="col-9 test2">
    @include('front.layout.home-content')
</div>
{{-- hot, new --}}
<div class="col-3 px-2" >
    <div class=" mt-2 d-flex flex-column">
        <div class=" newpost p-2 pb-3">
            @include('front.layout.new-post')
        </div>
        <div class="mt-2 topview p-2 pb-3">
            @include('front.layout.top-view')
        </div>
    </div>
</div>