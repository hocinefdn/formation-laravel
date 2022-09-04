<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticlesController;


Route::get('/', [IndexController::class,'index']);
Route::get('/articles/{id}', [ArticlesController::class, 'show']);
Route::get('/contact', [ContactController::class, 'show']);