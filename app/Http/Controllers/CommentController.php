<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Comment;

class CommentController extends Controller
{
    //

    public function postComment(Request $request, $art_id){
        $user_id= Cookie::get('user_id_cookie');
        $com =new Comment();
        $com->saveComment($request, $user_id, $art_id);
        return redirect()->back();
    }
}
