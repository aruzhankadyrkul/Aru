<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{id}',[PostController::class,'show'])->name('posts.show');


//Route::get('/',function(){
//    return "<h1>Main Page<h1/>";
//});
//
//Route::get('/users',function(){
//    return "<h1>Users Page<h1/>";
//});



