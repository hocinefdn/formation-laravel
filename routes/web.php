<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticlesController;


Route::get('/', [IndexController::class, 'index']);
Route::get('/articles', [ArticlesController::class, 'showAll']);
Route::get('/article/create', [ArticlesController::class, 'create'])->name('article.create');
Route::post('/article/create', [ArticlesController::class, 'addArticle'])->name('article.addArticle');
Route::get('/article/{id}', [ArticlesController::class, 'show'])->name("article.show");
Route::get('/contact', [ContactController::class, 'show']);