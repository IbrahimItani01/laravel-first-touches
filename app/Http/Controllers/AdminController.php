<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
function postNews(Request $request){
        $new = News::create([
            "title"=> $request->title,
            "content"=> $request->content,
            'is_restricted'=> $request->is_requested,
            'user_id'=> $request->user_id
        ]);
    return response()->json([
        "status"=>"success",
        "message"=>"News posted successfully"
    ],200);
}
function editNews(Request $request){
        // TODO: integrate model

    return response()->json([
        "status"=> "success",
        "message"=> "Edited message successfully"
    ],200);
}
function deleteNews($id){
    // TODO: integrate model
    return response()->json([
        "status"=> "success",
        "message"=> "Deleted news successfully"
    ],200);
}
function restrictNews(Request $request){
    // TODO: integrate model
    return response()->json([
        "status"=> "success",
        "message"=> "restricted articles for given ages"
    ]);
}
}
