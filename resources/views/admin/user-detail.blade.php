@extends('admin.layout.master')
@section('admin-content')
    <form class="d-flex flex-column p-5" action="{{route('admin-update-user', $user->id)}}" method="post">
        <input type="hidden" name="_method" value="put" />
        {{csrf_field()}}
        <div class="d-flex">
            <div class="col-3">
                <img src="{{$user->img}}" alt="" class="img-fluid border">
                <div class="form-group  d-flex flex-column border border-danger mt-4 p-3">
                    <label for="">Quyền hạn</label>
                    <div>
                        <input type="radio" name="role" id="" value="author"
                            {{($user->roles->first()['name']) === 'author' ? 'checked' : ''}}> Author
                    </div>
                    <div>
                    <input type="radio" name="role" id="" value="user"
                            {{($user->roles->first()['name']) === 'user' ? 'checked' : ''}}> User
                    </div>
                </div>
            </div>
            <div class="col-9 border-left">
                <div class="form-group d-flex">
                    <label for="" class="col-3">Tên :</label>
                    <input type="text" class="form-control col-9 rounded-0" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-3">Ngày sinh</label>
                    <input type="date" class="form-control col-9 rounded-0" name="birthday" value="{{$user->birthday}}">
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-3">Giới tính</label>
                    <div class="form-check form-check-inline col-6 d-flex justify-content-between">
                        <input class="form-check-input" type="radio" name="gender" id="" value="male" {{
                    ($user->gender ==='0') ? 'checked' : ''}}>
                        <label class="form-check-label" for="">Male</label>
                        <input class="form-check-input" type="radio" name="gender" id="" value="female" {{($user->gender
                    ==='1')? 'checked' : ''}}>
                        <label class="form-check-label" for="">Female</label>
                        <input class="form-check-input" type="radio" name="gender" id="" value="other"{{(($user->gender !=='1') && ($user->gender !=='0')) ? 'checked' : ''}}>
                        <label class="form-check-label" for="">Other</label>
                    </div>
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-3">email</label>
                    <input type="email" class="form-control col-9 rounded-0" name="email" value="{{$user->email}}">
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-3">Điện thoại</label>
                    <input type="text" class="form-control col-9 rounded-0" name="phone" value="{{$user->phone}}">
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-3">Địa chỉ</label>
                    <input type="text" class="form-control col-9 rounded-0" name="address" value="{{$user->address}}">
                </div>
                <div class="form-group d-flex">
                    <label for="" class="col-3">Giới thiệu bản thân</label>
                    <textarea class="form-control col-9 rounded-0" name="description" id="" cols="30"
                              rows="4">{{$user->description}}</textarea>
                </div>
            </div>
        </div>
        <div class="form-group d-flex justify-content-center mt-">
            <button class="btn manage__btn--green rounded-0 mx-2 text-white" style="width: 80px">Update</button>
            <a href="{{route('list-user')}}" class="btn manage__btn--green rounded-0  mx-2 text-white" style="width:
                80px"
               type=""
            >Back</a>
        </div>
    </form>
@endsection
