<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInformation;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

 //Answer to the  Question no-1
Route::post('/user_information',[ UserInformation::class,'store']);


 //Answer to the  Question no-2
Route::post('/User_Agent',[ UserInformation::class,'User_Agent']);


 //Answer to the  Question no-3
Route::get('/apiEndpoint',[ UserInformation::class,'apiEndpoint']);


 //Answer to the  Question no-4
Route::get('/JsonResponse',[ UserInformation::class,'JsonResponse']);


 //Answer to the  Question no-5
Route::post('/uploadAvatar',[ UserInformation::class,'avatar']);


 //Answer to the  Question no-6
Route::post('/retrieveRememberToken',[ UserInformation::class,'retrieveRememberToken']);


 //Answer to the  Question no-7
 Route::post('/submit',function(Request $request){
    $email = $request->input('email');
    if($email){
        return array(
            "success"=> true,
            "message"=> "Form submitted successfully."
        );
    }else{
        return "Email must not be empty!";
    }
});
