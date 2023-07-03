<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;





Route::get('/', function () {

     $posts = Post::with('categories')->get();
     return $posts;

});

Route::delete('/posts/{id}/delete',[PostController::class ,'softDelete']);

Route::get('/softDeletedata',[PostController::class ,'softDeletedata']);


Route::get('/allPosts', function () {

    $posts = Post::with('categories')->get();

    return view('components.all_posts', ['posts' => $posts]);


});


Route::get('/categories/{id}/posts',[PostController::class ,'specificCatPost']);


Route::get('/latestPost', function () {

    $latestPost =  DB::table('posts')->latest()->orderBy('created_at')->first();
    return $latestPost;

});






Route::get('/latestPosts', function () {
    $categories = Category::with('posts')->latest()->orderBy('created_at')->first();
    return view('components.latest_posts', ['categories' => $categories]);
    // return $categories;
});




