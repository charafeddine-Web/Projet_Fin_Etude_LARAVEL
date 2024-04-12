@extends('layouts.app')
 
@section('title', 'Show Professeur')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Detail Professeur</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Nom Professeur</label>
            <div class="mt-2">
                {{ $professeur->Nom_Professeur }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Prenom Professeur</label>
            <div class="mt-2">
                {{ $professeur->Prenom_Professeur }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Date_Naissance</label>
            <div class="mt-2">
                {{ $professeur->Date_Naissance }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Date_Recrutement</label>
            <div class="mt-2">
                {{ $professeur->Date_Recrutement }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">function</label>
            <div class="mt-2">
                {{ $professeur->function }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">situation_familiale</label>
            <div class="mt-2">
                {{ $professeur->situation_familiale }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Nombre_enfants</label>
            <div class="mt-2">
                {{ $professeur->Nombre_enfants }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">secteur</label>
            <div class="mt-2">
                {{ $professeur->secteur }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">grade</label>
            <div class="mt-2">
                {{ $professeur->grade }}
            </div>
        </div>
 
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">echelle</label>
            <div class="mt-2">
                {{ $professeur->echelle }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">status</label>
            <div class="mt-2">
                {{ $professeur->status }}
            </div>
        </div>
        
        
    </div>
</div>
@endsection