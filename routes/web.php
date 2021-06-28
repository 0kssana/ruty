<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[IndexController::class,'index']);
Route::get('/detail/{slug}/{id}',[IndexController::class,'detail']);
Route::get('/all-categories',[IndexController::class,'all_category']);
Route::get('/category/{slug}/{id}',[IndexController::class,'category']);
Route::post('/save-comment/{slug}/{id}',[IndexController::class,'save_comment']);
Route::get('save-post-form',[IndexController::class,'save_post_form']);
Route::post('save-post-form',[IndexController::class,'save_post_data']);
Route::get('manage-posts',[IndexController::class,'manage_posts']);
