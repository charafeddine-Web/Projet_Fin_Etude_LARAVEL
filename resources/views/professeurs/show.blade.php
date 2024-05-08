@extends('layouts.app')
 
@section('title', 'Show Professeur')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3 mb-6">Détails du Professeur</h1>
<hr class="mb-6" />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
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
            <div class="mt-2">
                {{ $professeur->Date_Naissance }}
            </div>
        </div>
        <div class="sm:col-span-3">
            <label class="block text-sm font-medium leading-6 text-gray-900">Date de Recrutement</label>
            <div class="mt-2">
                {{ $professeur->Date_Recrutement }}
            </div>
        </div>
        <div class="sm:col-span-3">
            <label class="block text-sm font-medium leading-6 text-gray-900">Fonction</label>
            <div class="mt-2">
                {{ $professeur->function }}
            </div>
        </div>
        <div class="sm:col-span-3">
            <label class="block text-sm font-medium leading-6 text-gray-900">Situation Familiale</label>
            <div class="mt-2">
                {{ $professeur->situation_familiale }}
            </div>
        </div>
        <div class="sm:col-span-3">
            <label class="block text-sm font-medium leading-6 text-gray-900">Nombre d'Enfants</label>
            <div class="mt-2">
                {{ $professeur->Nombre_enfants }}
            </div>
        </div>
        <div class="sm:col-span-3">
            <label class="block text-sm font-medium leading-6 text-gray-900">Secteur</label>
            <div class="mt-2">
                {{ $professeur->secteur }}
            </div>
        </div>
        <div class="sm:col-span-3">
            <label class="block text-sm font-medium leading-6 text-gray-900">Grade</label>
            <div class="mt-2">
                {{ $professeur->grade }}
            </div>
        </div>
        <div class="sm:col-span-3">
            <label class="block text-sm font-medium leading-6 text-gray-900">Échelle</label>
            <div class="mt-2">
                {{ $professeur->echelle }}
            </div>
        </div>
        <div class="sm:col-span-3">
            <label class="block text-sm font-medium leading-6 text-gray-900">Statut</label>
            <div class="mt-2">
                {{ $professeur->status }}
            </div>
        </div>
    </div>
</div>
@endsection
