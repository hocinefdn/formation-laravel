@extends('templates.master')

@section('title')
    Ajouter un article
@endsection

@section('content')
    <div class="flex justify-center p-4">
        <div>
            <h2 class="text-2xl flex justify-center">Ajouter un article</h2>
            <form action="{{ route('article.addArticle') }}" method="post" class="flex flex-col mt-4">
                @csrf
                <input type="text" name="title" placeholder="Titre" class="border p-2 m-2">
                <textarea name="content" cols="30" rows="10" placeholder="Contenu" class="border p-2 m-2"></textarea>
                <button type="submit" class="p-2 bg-green-500 rounded text-white mt-4">Ajouter</button>
            </form>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="text-red-500">{{ $error }}</div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
