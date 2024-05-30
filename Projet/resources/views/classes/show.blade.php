@extends('layouts.app')
 
@section('title', 'Show Classe')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3 mb-6">Détail de la Classe</h1>
<hr class="mb-6" />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-3">
        <div class="sm:col-span-1">
            <label class="block text-sm font-medium leading-6 text-gray-900">Nom de la Classe</label>
            <div class="mt-2 text-lg font-semibold">
                {{ $classe->Nom_Classe }}
            </div>
        </div>
 
        <div class="sm:col-span-1">
            <label class="block text-sm font-medium leading-6 text-gray-900">Année de Formation</label>
            <div class="mt-2">
                {{ $classe->Annee_Formation }}
            </div>
        </div>
        <div class="sm:col-span-1">
            <label class="block text-sm font-medium leading-6 text-gray-900">Mode de Formation</label>
            <div class="mt-2">
                {{ $classe->Mode_Formation}}
            </div>
        </div>
        <div class="sm:col-span-1">
            <label class="block text-sm font-medium leading-6 text-gray-900">Optimisé</label>
            <div class="mt-2">
                {{ $classe->optimisé }}
            </div>
        </div>
    </div>
    <hr class="mb-6 border-gray-300">

<!-- <div class="border-b border-gray-300 pb-6">
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
</div> -->
</div>
@endsection
