@extends('templates.master')

@section('title')
    Article
@endsection

@section('content')
    <div class="flex flex-row">

        <div class="w-2/3 p-2 m-2 border border-black rounded">
            <div class="font-bold">
                {{ $user_name }}
            </div>
            <div class="text-gray-600">

                Le {{ \Carbon\Carbon::parse($article->created_at)->format('d/m/Y') }}
            </div>
            <hr>
            <h3 class="text-xl text-blue-500 ">{{ $article->title }}</h3>
            <p>{{ $article->content }}</p>
        </div>
        <div class="w-1/3">
            <h4 class="text-red-500 flex justify-center text-lg">
                Commentaires
            </h4>
            <form action="{{ route('article.addComment', ['id' => $article->id]) }}" method="POST" class="flex flex-row">
                @csrf
                <textarea name="comment" cols="150" rows="2" placeholder="Ajoutez votre commentaire"
                    class="p-1 m-2 border border-gray"></textarea>
                <button type="submit" class="bg-green-500 p-2 m-4 rounded">Commenter</button>
            </form>

            @foreach ($article->comments as $comment)
                <div class="bg-gray-200 p-1 m-2 border border-gray">{{ $comment->content }}</div>
            @endforeach
        </div>

    </div>
@endsection
