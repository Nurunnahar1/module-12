<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //=======answer to the question no 6===========
    public function allPostByCategoyr($categoryID){

        $category = Category::find($categoryID);
        $totalPosts = Post::getTotalPostsByCategory($category->id);

        echo "Total posts in category {$category->name}: {$totalPosts}";

    }


    //=======answer to the question no 7===========


        public function softDelete( Request $request ) {
            $post = Post::find( $request->id );
            // return $post;
            if ( !$post ) {
                return response()->json( ['message' => 'Post not found'], 404 );
            }else{
                $post->delete();
                return response()->json( ['message' => 'Post soft deleted successfully'] );
            }

        }


    //=======answer to the question no 8===========


        public function getsoftDeletePost( Request $request ) {
            $softDeletedPosts = Post::getAllSoftDeletedPosts();

            foreach ($softDeletedPosts as $post) {
                echo $post->title. '   '.$post->created_at.'   '.$post->updated_at.'   '.$post->category_id  . '<br>';
            }

        }


    //=======answer to the question no 9===========


        public function showallPostsBlade()
        {

            $posts = Post::with('categories')->get();
            return view('components.posts',['posts' => $posts]);
        }


    //=======answer to the question no 10===========


    public function getPostsByCategory($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts;
        return $posts;

    }




}
