@extends('templates.master')

@section('title')
    Articles
@endsection

@section('content')
    <div class="articles-container">
        @foreach ($articles as $article)
            <div class="article">
                <a href="{{ route('article.show', ['id' => $article->id]) }}">
                    <h3 class="text-blue-600">{{ $article->title }}</h3>
                </a>
                <p>{{ $article->content }}</p>
            </div>
        @endforeach


    </div>
@endsection
