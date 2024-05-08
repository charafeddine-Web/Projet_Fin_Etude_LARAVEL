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
</div>
@endsection
