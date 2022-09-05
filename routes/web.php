<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticlesController;


Route::get('/', [IndexController::class, 'index']);
Route::get('/articles', [ArticlesController::class, 'showAll']);
Route::get('/ajouter-article', [ArticlesController::class, 'create'])->name('article.create');
Route::post('/article/create', [ArticlesController::class, 'addArticle'])->name('article.addArticle');
Route::get('/article/{id}', [ArticlesController::class, 'show'])->name("article.show");
Route::get('/inscription', [UserController::class, 'index'])->name("user.index");
Route::post('/inscription', [UserController::class, 'addUser'])->name("user.addUser");
Route::get('/connexion/{id}', [UserController::class, 'index'])->name("");
Route::get('/contact', [ContactController::class, 'show']);