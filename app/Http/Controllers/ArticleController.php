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
        $articles = Article::with('user')->orderBy('created_at', 'desc')->paginate('10');
        $allArticles = Article::with('user')->get();
        return view('front.index',[
            'articles'=>$articles,
            'allArticles'=> $allArticles,
        ]);
    }
    public function detail($id){
        $articles = Article::with('user')->get();
        $article = Article::with('user')->find($id);
        $comments= Comment::with('user')->where('article_id', $id)->orderBy('created_at', 'desc')->get();
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
        $this->validate($request, [
            'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $id= $request->cookie('user_id_cookie');
        $article= new Article();
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $imgName = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('img-upload');
            $image->move($path, $imgName);
            $article->saveArticle($request, $id, $imgName);
            return redirect()->route('list-article')->with('success','Image Upload successfully');
        }
    }
    public function searchArticle(Request $request){
        $articles = Article::search($request->input('search'))->get();
        return view('admin.list-article', ['articles'=>$articles]);
    }
    public function getEdit($id){
        $article= Article::find($id);
        return view('admin.update-article', ['article'=>$article]);
    }
    public function updateArticle(Request $request, $art_id){
        $this->validate($request, [
            'input_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
//        $user_id= $request->cookie('user_id_cookie');
        $article= new Article();
        if ($request->hasFile('input_img')) {
            $image = $request->file('input_img');
            $imgName = time().'.'.$image->getClientOriginalExtension();
            $path = public_path('img-upload');
            $image->move($path, $imgName);
            $article->updateArticle($request, $art_id, $imgName);
            return redirect()->route('list-article')->with('success','Image Upload successfully');
        }else{
            $article->updateArticle($request, $art_id, '');
            return redirect()->route('list-article')->with('success','Image Upload successfully');
        }
    }
        
}
