<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

// Route::middleware('guest')->group(function(){
    Route::get('/register', [AuthController::class, 'register']);
Route::post('/register/submit', [AuthController::class, 'submitRegister']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login/submit', [AuthController::class, 'submitLogin']);
// });

// Route::middleware('auth')->group(function(){
    Route::get('/', [HomeController::class, 'index']);

    Route::get('/about', [AboutController::class, 'index']);

    Route::get('/posts', [PostController::class, 'index']);
    
    Route::get('/posts/{post:slug}', [PostController::class, 'singlePost']);
    
    // Route::get('/authors/{user:username}', [PostController::class, 'author']);
    
    // Route::get('/category/{category:slug}', [PostController::class, 'category']);
    
    Route::get('/contact', [ContactController::class, 'index']);
    
    Route::get('/projects', [ProjectController::class, 'index']);
    
    Route::get('/projects/{project:slug}', [ProjectController::class, 'singleProject']);

    Route::post('/logout', [AuthController::class, 'logout']);
// });

 

                                                                                                                                           
    