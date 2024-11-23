<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function requestNews($id){
        // TODO: integrate the model
        return response()->json([
            "status"=>"success",
            "message"=> "news retrieved"
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
