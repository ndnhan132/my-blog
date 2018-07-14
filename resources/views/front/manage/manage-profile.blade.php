@extends('front.layout.manage-master')
@section('manage-content')
    <div class="manage-profile">
        <div class="pt-4 border-bottom border-secondary rounded-bottom">
                <span class="text-uppercase p-1 text-dark">
                    <i class="fas fa-address-card"></i>
                    Thong tin tai khoan
                </span>
        </div>
        <div class="d-flex pt-2">
            <div class="col-4 border">
                <img class="img-fluid mt-3 border" src="{{asset('img/avatar.jpg')}}" alt="">
                <form action="">
                    <input class="btn" type="file" />
                </form>
            </div>
            <div class="col-8">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection