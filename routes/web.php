<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ArticlesController;

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




Route::middleware(['auth'])->group(function () {
    Route::get('/foo', [TestController::class, 'foo']);
    Route::get('/bar', [TestController::class, 'bar']);
});

Route::get('/', function () {
    return view('welcome');
});


// articles
Route::get('/articles', [ArticlesController::class, 'showAll'])->name("article.showAll");;
Route::get('/ajouter-article', [ArticlesController::class, 'create'])->name('article.create')->middleware('auth');

// CRUD article
Route::resource("books", BookController::class);
// Route::resource('articles', 'App\Http\Controllers\ArticlesController');
Route::post('/article/create/{id}', [ArticlesController::class, 'addArticle'])->name('article.addArticle')->middleware('auth');
Route::get('/article/{id}', [ArticlesController::class, 'show'])->name("article.show");

Route::post('/article/addComment/{id}', [ArticlesController::class, 'addComment'])->name("article.addComment");
Route::delete('/article/deleteComment/{id}', [ArticlesController::class, 'deleteComment'])->name("article.deleteComment");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';