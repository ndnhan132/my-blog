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

// Route::get('/', function () {
//     return view('front.index');
// });
// Route::get('/','ArticleController@home');

// Route::get('/hh','UserController@index');
// Route::get('/master', function () {
//     return view('front.layout.master');
// });
Route::get('/home', 'ArticleController@home')->name('home');
Route::prefix('/manage')->group(function (){
    Route::get('/{id}/profile', 'UserController@userProfile')->name('user-profile');
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
Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/profile', function (){
        return view('admin.profile');
    });
    Route::get('/user', function (){
        return view('admin.index');
    });
    Route::get('/article', function (){
        return view('admin.index');
    });
    Route::get('/mailbox', function (){
        return view('admin.mailbox');
    });
    Route::get('/table', function (){
        return view('admin.table');
    });

});