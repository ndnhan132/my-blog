@extends('admin.layout.master')
@section('admin-content')
    <form class="col-12 px-5 pt-3" action="{{route('post-add-new-article')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="post"/> {{csrf_field()}}
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control rounded-0" id="" name="title">
        </div>
        <div class="form-group">
            <label for="">Img description</label>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <input name="input_img" type="file" id="" onchange="readURL(this);">
            <img class="col-sm-6 preview" id="preview"  src=" " alt="img"></img>
            {{--  <p class="help-block">Example block-level help text here.</p>  --}}

        </div>
        <div class="form-group">
            <label for="">Content</label>
            <textarea name="txtContent" class="form-control " id="editor1"></textarea>
        </div>

        <button class="float-right btn btn-success">
            Save
        </button>
    </form>
@endsection
