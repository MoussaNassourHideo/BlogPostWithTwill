<?php

use App\Http\Controllers\PostController;
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
Route::view('/','frontend.welcome');
Route::get('/blogposts',[PostController::class , 'index']);

Route::get('/posts/{slug}', [PostController::class ,'show']);

Route::get('/tag/{slug}', [PostController::class , 'showTaggedPosts']);