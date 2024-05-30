@extends('layouts.app')

@section('title', 'Show Professeur')

@section('contents')
<div class="container mx-auto p-4">
    <h1 class="font-bold text-2xl mb-6">Détails du Professeur</h1>
    <hr class="mb-6 border-gray-900">
    <div class="border-b border-gray-900 pb-12">
        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <label class="block text-sm font-medium leading-6 text-gray-900">Nom Professeur</label>
                <div class="mt-2 text-lg font-semibold">
                    {{ $professeur->Nom_Professeur }}
                </div>
            </div>
            <div class="sm:col-span-3">
                <label class="block text-sm font-medium leading-6 text-gray-900">Prénom Professeur</label>
                <div class="mt-2 text-lg font-semibold">
                    {{ $professeur->Prenom_Professeur }}
                </div>
            </div>
            <div class="sm:col-span-3">
                <label class="block text-sm font-medium leading-6 text-gray-900">Date de Naissance</label>
                <div class="mt-2 text-lg font-semibold">
                    {{ $professeur->Date_Naissance }}
                </div>
            </div>
            <div class="sm:col-span-3">
                <label class="block text-sm font-medium leading-6 text-gray-900">Date de Recrutement</label>
                <div class="mt-2 text-lg font-semibold">
                    {{ $professeur->Date_Recrutement }} </div>
            </div>
            <div class="sm:col-span-3">
                <label class="block text-sm font-medium leading-6 text-gray-900">function</label>
                <div class="mt-2 text-lg font-semibold">
                    {{ $professeur->function }} </div>
            </div>
            <div class="sm:col-span-3">
                <label class="block text-sm font-medium leading-6 text-gray-900">situation familiale</label>
                <div class="mt-2 text-lg font-semibold">
                    {{ $professeur->situation_familiale }} </div>
            </div>
            <div class="sm:col-span-3">
                <label class="block text-sm font-medium leading-6 text-gray-900">Nombre de enfants</label>
                <div class="mt-2 text-lg font-semibold">
                    {{ $professeur->Nombre_enfants }} </div>
            </div>
            <div class="sm:col-span-3">
                <label class="block text-sm font-medium leading-6 text-gray-900">secteur</label>
                <div class="mt-2 text-lg font-semibold">
                    {{ $professeur->secteur }} </div>
            </div>
            <div class="sm:col-span-3">
                <label class="block text-sm font-medium leading-6 text-gray-900">grade</label>
                <div class="mt-2 text-lg font-semibold">
                    {{ $professeur->grade }} </div>
            </div>

            <div class="sm:col-span-3">
                <label class="block text-sm font-medium leading-6 text-gray-900">echelle</label>
                <div class="mt-2 text-lg font-semibold">
                    {{ $professeur->echelle }}
                </div>
            </div>

            <div class="sm:col-span-3">
                <label class="block text-sm font-medium leading-6 text-gray-900">status</label>
                <div class="mt-2 text-lg font-semibold">
                    {{ $professeur->status }} </div>
            </div>

        </div>
    </div>
    <!-- <div class="container mx-auto p-4">
        <hr class="mb-4 border-gray-300">
        <div class="border-b border-gray-300 pb-4">
            <h2 class="text-xl font-semibold mb-2">Classes de l'Professeur : {{ $professeur->Nom_Professeur }}</h2>
            <ul class="list-disc ml-6">
                @if ($professeur->classes && $professeur->classes->isEmpty())
                <p class="text-gray-600">Aucune classe associée à cet professeur.</p>
                @elseif($professeur->classes)
                @foreach ($professeur->classes as $classe)
                <li class="mb-1">{{ $classe->Nom_Classe }}</li>
                @endforeach
                @else
                <p class="text-gray-600">Aucune classe associée à cet professeur.</p>
                @endif
            </ul>
        </div>
    </div> -->
</div>
@endsection