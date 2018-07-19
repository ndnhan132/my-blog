<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function home(){
        $articles= Article::select()->limit(10)->get();
        return view('front.index', ['articles'=> $articles]);
    }




}
