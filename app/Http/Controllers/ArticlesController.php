<?php

namespace App\Http\Controllers;

class ArticlesController extends Controller
{
    public function show(){
        return view("articles");
    }
}