<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Article extends Model
{
    //
    use SoftDeletes;
    use Searchable;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public function deleteArticle($id){
        $article= Article::find($id);
        $article->delete();
        $comments = Comment::where('article_id', '=', $id)->get();
        foreach($comments as $com){
            $com->delete();
        }
    }
    public function saveArticle($request, $id, $imgName){
        $this->title= $request->input('title');
        $this->content= $request->input('txtContent');
        $this->user_id= $id;
        $this->img = asset('img-upload/' . $imgName);
        $this->save();
    }
    public function updateArticle($request, $art_id, $imgName){
        $article=Article::find($art_id);
        $article->title= $request->input('title');
        $article->content= $request->input('txtContent');
//        dd($article);
        if($imgName !==''){
            $article->img = asset('img-upload/' . $imgName);
        }
        $article->save();
    }






    public function user(){
        return $this->belongsTo('App\User');
    }
    public function comment(){
        return $this->hasMany('App\Comment');
    }

    public function getCreatedAtAttribute($value){
        return date("Y-m-d", strtotime($value));
    }
//    public function getTitleAttribute($value){
//        return 'fsdaf' . $value;
//    }
//    public function getViewAttribute($value){
//        return $value * 100;
//    }

public function searchableAs()
    {
        return 'articles_index';
    }
    public function toSearchableArray()
    {
        $array = $this->toArray();
        return $array;
    }


}
