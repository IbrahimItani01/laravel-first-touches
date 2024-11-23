<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(["prefix"=> "/admin"], function () {
    Route::post("/",AdminController::class."postNews");
    Route::put("/",AdminController::class."editNews");
    Route::put("/{id}",AdminController::class."restrictNews");
    Route::delete("/{id}",AdminController::class."deleteNews");
});