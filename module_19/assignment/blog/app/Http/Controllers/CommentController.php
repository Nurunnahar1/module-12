<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function page(){
        return view('pages.postDetail');
    }


    function comment( Request $request ) {
      $comments =   Comment::create( [
            'post_id' => $request->post_id,
            'name'    => $request->name,

            'content' => $request->comment,

        ] );
        return response()->json( ['status' => 'success'], 201 );
    }
   
}
