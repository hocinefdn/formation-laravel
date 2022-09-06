@extends('templates.master')

@section('title')
    Inscription
@endsection

@section('content')
    <form action="{{ route('user.addUser') }}" method="post" class="form-inscription">
        @csrf
        <div class="flex flex-col mt-8">
            <h4 class="flex justify-center text-2xl">Inscrption</h4>

            <input type="text" name="firstname" placeholder="Prénom" class="ml-auto mr-auto">
            <input type="text" name="lastname"placeholder="Nom" class="ml-auto mr-auto">
            <input type="text" name="email"placeholder="email" class="ml-auto mr-auto">
            <input type="password" name="password"placeholder="Mot de passe" class="ml-auto mr-auto">
            <button type="submit" class="w-1/12 bg-green-500 mr-auto ml-auto rounded">S'inscrire</button>
        </div>
    </form>
@endsection
