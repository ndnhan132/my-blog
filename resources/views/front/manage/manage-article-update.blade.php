@extends('front.layout.manage-master')
@section('manage-content')
    <div class="manage__article-new">
        <div class="pt-4 border-bottom border-secondary rounded-bottom">
        <span class="text-uppercase p-1 text-dark">
            <i class="fas fa-pen-fancy"></i>
            Chỉnh sửa
        </span>
        </div>
        <form class="col-12 px-5 py-3" action="{{route('user-update-article', $article->id)}}" method="post"
              enctype="multipart/form-data">
            <input type="hidden" name="_method" value="put"/> {{csrf_field()}}
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control rounded-0" id="" name="title" value="{{$article->title}}">
            </div>
            <div class="form-group">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <input data-preview="#preview" name="input_img" type="file" id="" onchange="readURL(this)" value="{{$article->img}}">
                    <img class="col-sm-6 preview" id="preview"  src="{{$article->img}}" ></img>
                    {{--  <p class="help-block">Example block-level help text here.</p>  --}}
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="txtContent" class="form-control " id="editor1">
                {{$article->content}}
            </textarea>
            </div>

            <button class="float-right btn btn-success rounded-0">
                Update
            </button>
        </form>
    </div>
@endsection