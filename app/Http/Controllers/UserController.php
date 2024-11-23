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
        // TODO: integrate the model
        return response()->json([
            "status"=> "success",
            "message"=> "Posted article"
        ],200);
    }
}
