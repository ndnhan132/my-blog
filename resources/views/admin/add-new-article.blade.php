@extends('admin.layout.master')
@section('admin-content')
    <form class="col-12 px-5 pt-3" action="{{route('post-add-new-article')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="post"/> {{csrf_field()}}
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control rounded-0" id="" name="title">
        </div>
        <div class="form-group">
            {{--<label for="">Img description</label>--}}
            {{--<input type="text" class="form-control rounded-0" id="" name="img">--}}


            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <input data-preview="#preview" name="input_img" type="file" id="imageInput">
            <img class="col-sm-6" id="preview"  src="" ></img>
            {{--  <p class="help-block">Example block-level help text here.</p>  --}}

            {{--{{Form::open(['route' => 'user.store', 'files' => true])}}--}}
            {{--{{Form::label('user_photo', 'User Photo',['class' => 'control-label'])}}--}}
            {{--{{Form::file('user_photo')}}--}}
            {{--{{Form::submit('Save', ['class' => 'btn btn-success'])}}--}}
            {{--{{Form::close()}}--}}

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
