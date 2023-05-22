<?php

namespace App\Http\Controllers;

 
use Illuminate\Http\Request;

use Illuminate\Http\JsonResponse;

class UserInformation extends Controller
{
     //Answer to the  Question no-1

    function store(Request $request){
        $name=$request->input('name');

        return "user name is {$name}.";
    }



     //Answer to the  Question no-2
   function User_Agent(Request $request){
        $userAgent = $request->header('User-Agent');
        return "User agent is {$userAgent}";
   }

    //Answer to the  Question no-3


    function apiEndpoint(Request $request){
        $page = $request->query('page',null);

        if ($page !== null) {
            return "parameter is present";
        } else {
            return "parameter is not present";
        }
    }


        //Answer to the  Question no-4




        function JsonResponse():JsonResponse{
            $data = array(
                "message"=> "Success",
                "data"=>array(
                    "name"=> "John Doe",
                    "age"=> 25
                )
            );
            return response()->json($data);

        }

       //Answer to the  Question no-5

        function avatar(Request $request)
        {

            $file = $request->file('avatar');
            $filePath = $file->store('uploads', 'public');
            $originalFilename = $file->getClientOriginalName();
            return "File uploaded successfully. File path {$filePath} and file original anme is {$originalFilename}";

         }



       //Answer to the  Question no-6

         function retrieveRememberToken(Request $request){

            $request->cookie('remember_token', null);
            return "remember token is present";

        }










}
