<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// task-1 form validation
Route::post('/registration',[AssignmentController::class,'FormValidation']);
