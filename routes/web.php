<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});

Route::get('/master', function () {
    return view('front.layout.master');
});
Route::get('/profile', function (){
   return view('front.profile');
});
Route::get('/profile/update' , function (){
    return view('front.profile-update');
});
Route::get('/profile/account', function (){
    return view('front.profile-account');
});