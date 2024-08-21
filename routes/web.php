<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/posts/create', [PostController::class,'create']);
Route::get('/posts/read', [PostController::class,'read']);
Route::get('/posts/all', [PostController::class,'all']);
Route::get('/posts/update', [PostController::class,'update']);

Route::get('/', function () {return view('welcome');});
