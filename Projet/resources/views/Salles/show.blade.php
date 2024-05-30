@extends('layouts.app')
 
@section('title', 'Show Salle')
 
@section('contents')
<div class=" py-8 px-4 sm:px-6 lg:px-8">
    <h1 class="font-bold text-2xl ml-3 mb-6">Détail de la Salle</h1>
    <hr class="mb-6" />
    <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-2">
            <div class="sm:col-span-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">Nom de la Salle</label>
                <div class="mt-2 text-lg font-semibold">
                    {{ $salle->Nom_Salle }}
                </div>
            </div>
            <div class="sm:col-span-1">
                <label class="block text-sm font-medium leading-6 text-gray-900">Type de Salle</label>
                <div class="mt-2 text-lg font-semibold">
                    {{ $salle->type_Salle }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
