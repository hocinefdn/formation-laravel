<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $userName = User::find($article->user_id)->name;


        return view("article", ["article" => $article, "user_name" => $userName]);
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

    public function addArticle(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255|min:5|unique:articles',
            'content' => 'required'
        ]);
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $id
        ]);
    }
    public function addComment(Request $request, $id)
    {
        Comment::create([
            'content' => $request->comment,
            'article_id' => $id
        ]);
    }

    public function deleteComment(Request $request, $id)
    {
        $deleted = Comment::where('id', $id)->delete();
    }
}