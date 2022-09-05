@extends('templates.master')

@section('title')
    Inscription
@endsection

@section('content')
    <form action="{{ route('user.addUser') }}" method="post">
        @csrf
        <div class="flex flex-col mt-8">
            <h4 class="flex justify-center text-xl">Inscrption</h4>

            <input type="text" name="firstname" placeholder="Prénom" class="w-1/5 ml-auto mr-auto">
            <input type="text" name="lastname"placeholder="Nom" class="w-1/5 ml-auto mr-auto">
            <input type="text" name="email"placeholder="email" class="w-1/5 ml-auto mr-auto">
            <input type="password" name="password"placeholder="Mot de passe" class="w-1/5 ml-auto mr-auto">
            <button type="submit" class="w-1/12 bg-green-500 mr-auto ml-auto rounded">S'inscrire</button>
        </div>
    </form>
@endsection
