@extends('templates.master')

@section('meta')
<meta charset="UTF-8">
<meta name="description" content="Tutoriel Laravel 9 gratuit">
<meta name="keywords" content="HTML, CSS, JavaScript">
<meta name="author" content="John Doe">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection

@section('content')
<div class="articles-container">
    <div class="article">
        <a href="{{route('article.show',['id'=>$article->id])}}">
            <h3>{{$article->title}}</h3>
        </a>
        <p>{{$article->content}}</p>
    </div>


</div>
@endsection
