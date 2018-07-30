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
use Illuminate\Cookie;

Route::get('/', 'ArticleController@home')->name('home');
Route::get('/home', 'ArticleController@home')->name('home');
Route::get('/{id}/detail', 'ArticleController@detail')->name('article-detail');

Route::get('/register', 'UserController@create')->name('register');
Route::post('/user/store', 'UserController@store')->name('user-store');
Route::get('/login', 'UserController@getLogin')->name('get-login');
Route::post('/login', 'UserController@postLogin')->name('post-login');
Route::get('/logout', 'UserController@logout')->name('logout');

Route::prefix('/manage')->group(function () {
    Route::get('/profile', 'UserController@profile')->name('user-profile');
    Route::get('/edit', 'UserController@edit')->name('user-edit');
    Route::put('/update', 'UserController@update')->name('user-update');
    Route::get('/account', 'UserController@account')->name('user-account');
    Route::put('/account/update', 'UserController@accountUpdate')->name('user-account-update');
    Route::delete('/account/delete', 'UserController@accountDelete')->name('user-account-delete');
});


Route::prefix('/manage')->group(function (){
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