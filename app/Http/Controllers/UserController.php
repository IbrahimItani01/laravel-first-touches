<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\News;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function requestNews($id){
        $news = News::find($id);
        return response()->json([
            "status"=>"success",
            "message"=> "news retrieved",
            "data"=> $news
        ],200);
    }
    function postArticle(Request $request){
        $article = Article::create([
            "news_id"=> $request->news_id,
            "user_id"=>$request->user_id,
            "content"=> $request->content,
        ]);
        return response()->json([
            "status"=> "success",
            "message"=> "Posted article",
            "data"=>$article
        ],200);
    }
}
