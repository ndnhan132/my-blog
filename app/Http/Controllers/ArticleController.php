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
    public function articleDelete($id){}
    public function addNewArticle(){}
    public function searchArticle(Request $request){
        $articles = Article::search($request->input('search'))->get();
        return view('admin.list-article', ['articles'=>$articles]);
    }
    // public function getListArticle(){}
}
