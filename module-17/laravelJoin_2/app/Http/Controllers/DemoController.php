<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
  function DemoAction(){
    //===========answer to the question no 4===================
    // $posts = DB::table('posts')->where('id', 2)->first();
    // return $posts;


    //===========answer to the question no 2===================
    $posts = DB::table('posts')
    ->select('excerpt', 'description')
    ->get();

    return($posts);
      //===========answer to the question no 5===================
    // $posts = DB::table('posts')->where('id', 2)->pluck('description')->first();
    // return $posts;


      //===========answer to the question no 7===================
    //   $posts = DB::table('posts')->pluck('title');
    //   return $posts;


      //===========answer to the question no 8===================
        // $result=DB::table('posts')->insert([

        //     'title' => 'X',
        //     'slug' => 'X',
        //     'excerpt' => 'excerpt',
        //     'description' => 'description',
        //     'is_published' => true,
        //     'min_to_read' => 2
        // ]);
        // return $result;
 


      //===========answer to the question no 9===================
    //   $data = [
    //     'excerpt' => 'Laravel 10',
    //     'description' => 'Laravel 10'
    // ];

    // $data_1 = DB::table('posts')->where('id', 2)->update($data);
    // return $data_1;


      //===========answer to the question no 10===================
    //   $data = DB::table('posts')->where('id', 3)->delete();
    //   return $data;



      //===========answer to the question no 14===================
    //   $posts = DB::table('posts')
    //   ->whereBetween('min_to_read', [1, 5])
    //   ->get();

    //     return($posts);



      //===========answer to the question no 15===================
    //   $data = DB::table('posts')
    //   ->where('id', 3)
    //   ->increment('min_to_read', 1);

    //     return $data;
  }
}
