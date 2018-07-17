@extends('front.layout.manage-master')
@section('manage-content')
<div class="manage__update">
    <div class="pt-4 border-bottom border-secondary rounded-bottom">
        <span class="text-uppercase p-1 text-dark">
            <i class="fas fa-pen-fancy"></i>
            Cap nhat thong tin
        </span>
    </div>
    <div class="col-10 offset-1 border mt-4">
        <form class="d-flex flex-column py-4">
            <div class="form-group d-flex">
                <label for="" class="col-3">ho va ten</label>
                <input type="text" class="form-control col-9 rounded-0" name="" value="">
            </div>
            <div class="form-group d-flex">
                <label for="" class="col-3">ngay sinh</label>
                <input type="date" class="form-control col-9 rounded-0" name="" value="">
            </div>
            <div class="form-group d-flex">
                <label for="" class="col-3">Gioi tinh</label>
                <div class="form-check form-check-inline col-6 d-flex justify-content-between">
                    <input class="form-check-input" type="radio" name="" id="" value="male">
                    <label class="form-check-label" for="">Male</label>
                    <input class="form-check-input" type="radio" name="" id="" value="female">
                    <label class="form-check-label" for="">Female</label>
                    <input class="form-check-input" type="radio" name="" id="" value="other">
                    <label class="form-check-label" for="">Other</label>
                </div>
            </div>
            <div class="form-group d-flex">
                <label for="" class="col-3">email</label>
                <input type="email" class="form-control col-9 rounded-0" name="" value="">
            </div>
            <div class="form-group d-flex">
                <label for="" class="col-3">Sdt</label>
                <input type="text" class="form-control col-9 rounded-0" name="" value="">
            </div>
            <div class="form-group d-flex">
                <label for="" class="col-3">dia chi</label>
                <input type="text" class="form-control col-9 rounded-0" name="" value="">
            </div>
            <div class="form-group d-flex">
                <label for="" class="col-3">Gioi thieu ban than</label>
                <textarea class="form-control col-9 rounded-0" name="" id="" cols="30" rows="4"></textarea>
            </div>
            <div class="form-group d-flex justify-content-center mt-4">
                <button class="btn manage__btn--green rounded-0 mx-2" style="width: 80px" type="submit">Update</button>
                <button class="btn manage__btn--green rounded-0 mx-2" style="width: 80px" type="reset" value="Reset">Reset</button>
                <button class="btn manage__btn--green rounded-0 mx-2" style="width: 80px" type="" >Back</button>
            </div>
        </form>
    </div>
</div>
@endsection