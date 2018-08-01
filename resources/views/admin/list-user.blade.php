@extends('admin.layout.master')
@section('admin-content')
    <div class="">
        <div>
            <ul class="list-group p-5">
                <li class="d-flex list-group-item list-group-item-success rounded-0 py-0 align-items-center">
                    <span class="text-center text-dark text-uppercase">
                        Danh sach thanh vien
                    </span>
                    <div class="d-flex ml-auto">
                        <form class="form-inline admin__header__search px-2" method="get" action="{{route('search-user')
                        }}">
                        @include('admin.layout.search-form')
                        <button type="button" class="btn btn-link ml-auto" data-toggle="modal" data-target="#new-user">
                            <i class="fas fa-plus-circle" style="font-size: 24px"></i>
                        </button>
                    </div>
                </li>
                <div class="modal fade " id="new-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog " role="document">
                        <div class="modal-content rounded-0">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <form action="{{route('add-new-user')}}" method="post">
                                <input type="hidden" name="_method" value="post" />
                                {{csrf_field()}}
                                <div class="modal-body">
                                    <input type="text" class="form-control rounded-0" name="username" value=""
                                           placeholder="Username">
                                    <input type="text" class="form-control rounded-0" name="password" value=""
                                           placeholder="Password">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary rounded-0">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @php
                    $count=0;
                @endphp
                @foreach($users as $user)
                    <li class="list-group-item text-dark rounded-0 d-flex justify-content-between">
                        <span class="col-1 border-right">
                            {{++$count}}
                        </span>
                        <span class="col-4 border-right">
                            {{$user->name}}
                        </span>
                        <span class="col-4">
                            {{$user->roles->first()['name']}}
                        </span>

                        <div class="d-flex ml-auto border-left">
                            <form action="{{route('user-detail', $user->id)}}" method="get" class="px-2">
                                <button class="btn btn-primary rounded-0 btn-sm">
                                    <i class="fas fa-angle-double-right"></i>
                                </button>
                            </form>
                            {{--<form action=""method="" class="px-2">--}}
                                {{--<button class="btn btn-info rounded-0 btn-sm">--}}
                                    {{--<i class="far fa-edit"></i>--}}
                                {{--</button>--}}
                            {{--</form>--}}
                            <form action="{{route('user-delete', $user->id)}}" method="post" class="px-2">
                                <input type="hidden" name="_method" value="delete" /> {{csrf_field()}}
                                <button class="btn btn-danger rounded-0 btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection



<!-- Modal -->
