<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function page(){
        return view('pages.post');

    }
   function show_post(Request $request){
        return $post= Post::all();
        // return DB::table('posts')->get();


   }
   function postdetail(Request $request){

      $posts = Post::find($request->id);
      return view('pages.postDetail',compact('posts'));
   }
}
