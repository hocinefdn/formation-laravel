<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view("article", ["article" => $article]);
    }

    public function showAll()
    {
        $articles = Article::all();
        return view("articles", ["articles" => $articles]);
    }

    public function create()
    {
        return view("ajouterArticles");
    }

    public function addArticle(Request $request)
    {
        Article::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
    }
}