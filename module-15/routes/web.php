<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

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
Route::post('/registration',[RegisterController::class,'register']);


//Answer - 2
Route::get('/home', function () {
    return redirect('/dashboard', 302);
});

Route::get('/dashboard', function () {
    return "dashboard page";
});



//5
Route::get('/homepage', [ProductController::class, 'index']) ;
Route::get('/create', [ProductController::class, 'create']) ;
Route::post('/store', [ProductController::class, 'store']) ;
Route::get('/page/{id}/edit', [ProductController::class, 'edit']) ;
Route::put('/page/{id}', [ProductController::class, 'update']) ;
Route::delete('/page/{id}', [ProductController::class, 'destroy']) ;

