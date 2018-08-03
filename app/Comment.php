<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    //
    use SoftDeletes;
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function saveComment($request, $user_id, $art_id){
        $this->user_id= $user_id;
        $this->article_id= $art_id;
        $this->comment= $request->input('comment');
        $this->save();
    }


    public function user(){
        return $this->belongsTo('App\User');
    }
    public function article(){
        return $this->belongsTo('App\Article');
    }


    public function getAbcAttribute(){
        return "{$this->created_at}";
    }
}
