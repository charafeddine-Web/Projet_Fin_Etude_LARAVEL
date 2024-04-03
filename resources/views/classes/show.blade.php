@extends('layouts.app')
 
@section('title', 'Show Classe')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Detail Classe</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Nom Classe</label>
            <div class="mt-2">
                {{ $classe->Nom_Classe }}
            </div>
        </div>
 
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Annee Formation</label>
            <div class="mt-2">
                {{ $classe->Annee_Formation }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Mode Formation</label>
            <div class="mt-2">
                {{ $classe->Mode_Formation}}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">optimisé</label>
            <div class="mt-2">
                {{ $classe->optimisé }}
            </div>
        </div>
        </form>
    </div>
</div>
@endsection