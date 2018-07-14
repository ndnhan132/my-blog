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

// Route::get('/master', function () {
//     return view('front.layout.master');
// });
Route::prefix('/manage')->group(function (){
    Route::get('/profile', function (){
        return view('front.manage.manage-profile');
    });
    Route::get('/update', function (){
        return view('front.manage.manage-update');
    });
    Route::get('/account', function (){
        return view('front.manage.manage-account');
    });
    Route::get('/article/new', function (){
        return view('front.manage.manage-article-new');
    });
    Route::get('/article/manage', function (){
        return view('front.manage.manage-article-manage');
    });
    Route::get('/article/info', function (){
        return view('front.manage.manage-article-info');
    });
});
Route::get('/admin', function(){
    return view('admin.index');
});