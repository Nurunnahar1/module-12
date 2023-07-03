<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{




    public function softDelete($id)
    {
        $softDelete = Post::findOrFail($id)->delete();
        if ($softDelete) {
            return 'successfully soft deleted';
        } else {
            return 'failed to softdelete';
        }
    }




        public function softDeletedata()
    {
        $softDeletedata = Post::onlyTrashed()->get();
        return $softDeletedata;
    }









    public function specificCatPost($id)
    {
        $category = Category::with('posts')->find($id);
     return $category;
    }




    




}
