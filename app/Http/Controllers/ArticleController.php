<?php

namespace App\Http\Controllers;
use App\Article;

use App\Comment;
use App\Role;
use Carbon\Carbon;
use Illuminate\Http\Request;



class ArticleController extends Controller
{
    //

    
    public function home(){
        $articles = Article::with('user')->get();
        return view('front.index',['articles'=>$articles]);
    }
    public function detail($id){
        $articles = Article::with('user')->get();
        $article = Article::with('user')->find($id);
        $comments= Comment::with('user')->where('article_id', $id)->get();
        return view('front.article-detail',[
                                                    'article'=>$article,
                                                    'articles'=>$articles,
                                                    'comments'=>$comments,
        ]);
    }
    public function getListArticle(){
        $articles= Article::with('user')->get();
        return view('admin.list-article', ['articles'=>$articles]);
    }
    public function articleDelete($id){
        $article= new Article();
        $article->deleteArticle($id);
        return redirect()->back();
    }
    public function getAddNewArticle(){
        return view('admin.add-new-article');
    }
    public function postAddNewArticle(Request $request){
//        dd('ad');
//        if ($request->hasFile('input_img')) {
//            if($request->file('input_img')->isValid()) {
//                try {
//                    $file = $request->file('input_img');
//        $photoName = time().'.'.$request->user_photo->getClientOriginalExtension();
//        $request->user_photo->move(public_path('avatars'), $photoName);
//                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
//
//                }
//            }
//        }





//        $id= $request->cookie('user_id_cookie');
//        $article= new Article();
//        $article->saveArticle($request, $id);
//        return redirect()->route('list-article');

    }
    public function searchArticle(Request $request){
        $articles = Article::search($request->input('search'))->get();
        return view('admin.list-article', ['articles'=>$articles]);
    }
    // public function getListArticle(){}
}
