@extends('templates.master')

@section('title')
    Articles
@endsection

@section('content')
    <div class="articles-container">
        @foreach ($articles as $article)
            <x-mycomponent name="HosHos" :title="$article->title" class="text-green-500">
                <h1 class="text-red-500">test</h1>
            </x-mycomponent>
            <div class="article">
                <a href="{{ route('article.show', ['id' => $article->id]) }}">
                    <h3 class="text-blue-600">{{ $article->title }}</h3>
                </a>
                <p>{{ $article->content }}</p>
            </div>
        @endforeach
    </div>
@endsection
