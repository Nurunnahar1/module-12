<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



// Route::get('/', function () {
//     return view('welcome');
// });

//=======answer to the question no 5===========
Route::get('/allPosts', function () {
    $posts = Post::with('category')->get();
    return $posts;
});

//=======answer to the question no 6===========
Route::get('/allPostByCategoyry/{categoryID}',  [PostController::class,'allPostByCategoyr']);


//=======answer to the question no 7===========
Route::get('/posts/{id}/delete', [PostController::class,'softDelete'])->name('posts.softDelete');


//=======answer to the question no 8===========
Route::get('/softDeletedPosts', [PostController::class,'getsoftDeletePost']) ;


//=======answer to the question no 9===========
Route::get('/showallPostsBlade', [PostController::class,'showallPostsBlade']) ;


//=======answer to the question no 10===========
 Route::get('/categories/{id}/posts', [PostController::class, 'getPostsByCategory'])->name('categories.posts');


//=======answer to the question no 11===========
Route::get('/latestPost', function () {

    $latestPost =  DB::table('posts')->latest()->orderBy('created_at')->first();
    return $latestPost;

});
//=======answer to the question no 12===========
Route::get('/latestPosts', function () {
    $categories = Category::with('posts')->latest()->orderBy('created_at')->first();
    return view('components.latest_posts', ['categories' => $categories]);
    

});



