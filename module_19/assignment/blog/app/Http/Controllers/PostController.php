<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('components.posts',compact('posts'));
    }
    public function postDetails(Request $request){

        $post = Post::find($request->id);
        return view('components.post_details',compact('post'));
    }
}
