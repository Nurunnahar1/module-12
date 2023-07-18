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

        return view('pages.postDetail');

    }

}
