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

Route::post('/comment/{art_id}', 'CommentController@postComment')->name('post-comment');

Route::prefix('/manage')->group(function () {
    Route::get('/profile', 'UserController@profile')->name('user-profile');
    Route::get('/edit', 'UserController@edit')->name('user-edit');
    Route::put('/update', 'UserController@update')->name('user-update');
    Route::get('/account', 'UserController@account')->name('user-account');
    Route::put('/account/update/{id}', 'UserController@accountUpdate')->name('user-password-update');
    Route::delete('/account/delete/{id}', 'UserController@accountDelete')->name('user-account-delete');
});
Route::prefix('/admin')->group(function () {
    Route::get('/','UserController@dashboard')->name('admin');
    Route::prefix('/user')->group(function () {
        Route::get('/list', 'UserController@getListUser')->name('list-user');
        Route::get('/detail/{id}', 'UserController@userDetail')->name('user-detail');
        Route::delete('/delete/{id}', 'UserController@userDelete')->name('user-delete');
        Route::post('/add-new', 'UserController@addNewUser')->name('add-new-user');
        Route::get('/seach-user', 'UserController@searchUser')->name('search-user');
        Route::put('/user-update/{id}', 'UserController@adminUpdateUser')->name('admin-update-user');
    });
    Route::prefix('/article')->group(function () {
        Route::get('/list', 'ArticleController@getListArticle')->name('list-article');
        // Route::get('/detail/{id}', 'ArticleController@userDetail')->name('user-detail');
        Route::delete('/delete/{id}', 'ArticleController@articleDelete')->name('article-delete');
        Route::get('/add-new', 'ArticleController@getAddNewArticle')->name('get-add-new-article');
        Route::post('/add-new', 'ArticleController@postAddNewArticle')->name('post-add-new-article');
        Route::get('/seach-article', 'ArticleController@searchArticle')->name('search-article');
        Route::get('/edit/{id}', 'ArticleController@getEdit')->name('get-edit-article');
        Route::put('/update/{id}', 'ArticleController@updateArticle')->name('update-article');
    });
    Route::prefix('/as')->group(function () {
    });
});