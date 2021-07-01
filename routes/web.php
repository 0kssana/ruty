<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middlewar  e group. Now create something great!
|
*/

// Route::get('/', function(){
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index']);
Route::get('/detail/{slug}/{id}',[IndexController::class,'detail']);
Route::get('/all-categories',[IndexController::class,'all_category']);
Route::get('/category/{slug}/{id}',[IndexController::class,'category']);
Route::post('/save-comment/{slug}/{id}',[IndexController::class,'save_comment']);
Route::get('save-post-form',[IndexController::class,'save_post_form']);
Route::post('save-post-form',[IndexController::class,'save_post_data']);
Route::get('manage-posts',[IndexController::class,'manage_posts']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::any('/logout', [LoginController::class, 'logout'])->name('logout');
// Admin Routes
Route::get('/admin/login',[AdminController::class,'login']);
Route::post('/admin/login',[AdminController::class,'submit_login']);
Route::get('/admin/logout',[AdminController::class,'logout']);
Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
// Post
Route::get('admin/user',[AdminController::class,'users']);
Route::get('admin/user/delete/{id}',[AdminController::class,'delete_user']);
// Comment
Route::get('admin/comment',[AdminController::class,'comments']);
Route::get('admin/comment/delete/{id}',[AdminController::class,'delete_comment']);
// Categories
Route::get('admin/category/{id}/delete',[CategoryController::class,'destroy']);
Route::resource('admin/category',CategoryController::class);
// Posts
Route::get('admin/post/{id}/delete',[PostController::class,'destroy']);
Route::resource('admin/post',PostController::class);
// Settings
Route::get('/admin/setting',[SettingController::class,'index']);
Route::post('/admin/setting',[SettingController::class,'save_settings']);

//Auth::routes();

Route::get('/home', [IndexController::class, 'index'])->name('home');
