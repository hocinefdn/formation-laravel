@extends('templates.master')

@section('meta')
<meta charset="UTF-8">
<meta name="description" content="Tutoriel Laravel 9 gratuit">
<meta name="keywords" content="HTML, CSS, JavaScript">
<meta name="author" content="John Doe">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@endsection

@section('content')
<div>
    <h2>Ajouter un article</h2>
    <form action="{{route('article.addArticle')}}" method="post">
        @csrf
        <input type="text" name="title" placeholder="Titre">
        <textarea name="content" cols="30" rows="10" placeholder="Contenu"></textarea>
        <button type="submit" >Ajouter</button>
    </form>
</div>

@endsection
