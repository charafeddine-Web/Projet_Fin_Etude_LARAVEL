@extends('layouts.app')

@section('title', 'Classes du professeur')

@section('contents')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Classes du Professeur :</h1>
    <hr class="mb-4 border-gray-300">

    <div class="border-b border-gray-300 pb-4">
        <h2 class="text-xl font-semibold mb-2">Classes de l'Professeur : {{ $prof->Nom_Professeur }}</h2>

        <ul class="list-disc ml-6">
            @if ($prof->classes && $prof->classes->isEmpty())
                <p class="text-gray-600">Aucune classe associée à cet professeur.</p>
            @elseif($prof->classes)
                @foreach ($prof->classes as $classe)
                    <li class="mb-1">{{ $classe->Nom_Classe }}</li>
                @endforeach
            @else
                <p class="text-gray-600">Aucune classe associée à cet professeur.</p>
            @endif
        </ul>
    </div>
</div>
@endsection
