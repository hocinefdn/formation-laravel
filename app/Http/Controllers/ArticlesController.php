<?php

namespace App\Http\Controllers;

class ArticlesController extends Controller
{
    public function show($id){

            $articles=[
                1=> "Article 1",
                2=> "Article 2",
                3=> "Article 3"
            ];

            $article = $articles[$id]??"Pas d'article";


        return view("articles",["post"=>$article]);
    }
}