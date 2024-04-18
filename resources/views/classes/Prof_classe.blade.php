@extends('layouts.app')

@section('title', 'Professeurs de la classe')

@section('contents')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Professeurs de la Classe :</h1>
    <hr class="mb-6 border-gray-300">

    <div class="border-b border-gray-300 pb-6">
        <h2 class="text-xl font-semibold mb-2">Professeur de la classe : {{ $classe->Nom_Classe }}</h2>

        <ul class="list-disc ml-6">
            @if ($classe->profs && $classe->profs->isEmpty())
                <p class="text-gray-600">Aucun professeur associé à cette classe.</p>
            @elseif ($classe->profs)
                @foreach ($classe->profs as $prof)
                    <li class="mb-1">{{ $prof->Nom_Professeur }}</li>
                @endforeach
            @else
                <p class="text-gray-600">Aucun professeur associé à cette classe.</p>
            @endif
        </ul>
    </div>
</div>
@endsection
