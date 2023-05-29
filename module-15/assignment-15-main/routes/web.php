<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    // return view('welcome');
    return "Validation failled";
});

// task-1 form validation
Route::post('/registration',[AssignmentController::class,'FormValidation']);


// task-2 Request Redirect
Route::get('/home',function(){
    return redirect('/dashboard',302);
});
Route::get('/dashboard',function(){
    return "Welcome to Dashboard";
});

// Task 3: Global Middleware LoginInfo.php

// Task 4: Route Middleware
Route::middleware(AuthMiddleware::class)->group(function(){
    Route::get('/profile',function(){
        return "Welcome to profile page";
    });
    Route::get('/settings',function(){
        return "Welcome to settings page";
    });
});

// Task 5: Controller
Route::resource('/product',ProductController::class);

// Task 6: Single Action Controller
Route::post('/contact',ContactController::class);

//Task 7: Resource Controller



// Task 8: Blade Template Engine
Route::get('/', function () {
    return view('welcome');
});
