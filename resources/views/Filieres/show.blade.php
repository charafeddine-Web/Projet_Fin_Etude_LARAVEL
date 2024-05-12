@extends('layouts.app')
 
@section('title', 'Show Filiere')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3 mb-6">Détail du Filiere</h1>
<hr class="mb-6" />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2">
        <div class="sm:col-span-1">
            <label class="block text-sm font-medium leading-6 text-gray-900">Code du Filiere</label>
            <div class="mt-2 text-lg font-semibold">
                {{ $filiere->code_filiere}}
            </div>
        </div>
        <div class="sm:col-span-1">
            <label class="block text-sm font-medium leading-6 text-gray-900">Nom du Filiere</label>
            <div class="mt-2 text-lg font-semibold">
                {{ $filiere->Nom_Filiere}}
            </div>
        </div>
        <div class="sm:col-span-1">
            <label class="block text-sm font-medium leading-6 text-gray-900">Année</label>
            <div class="mt-2 text-lg font-semibold">
                {{ $filiere->annee}}
            </div>
        </div>
    </div>
</div>
@endsection
