<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//page route
Route::get('/',  [PostController::class,'page']);
Route::get('/comment',  [CommentController::class,'page']);

//Ajax call route
Route::get('/show_post',  [PostController::class,'show_post']);
Route::get('/postdetail/{id}',  [PostController::class,'postdetail'])->name('postdetails');
Route::post('/comment',[CommentController::class,'comment'] )->name('comment');
