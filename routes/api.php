<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PostController::class)->group(function(){
    Route::get("posts/{id?}","fetch");
    Route::get("posts/profile/{id}","fetchUser");
    Route::post("addComment","addComment")->middleware("auth:sanctum");
    Route::post("like/{post_id}","addLike")->middleware("auth:sanctum");
});

Route::controller(UserController::class)->group(function(){
    Route::post("login","loginApi");
    Route::post("logout","logoutApi")->middleware("auth:sanctum");
});