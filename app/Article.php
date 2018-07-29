<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    //

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];


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


}
