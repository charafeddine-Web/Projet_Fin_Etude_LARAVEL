@extends('layouts.app')

@section('title', 'Edit Professeur')

@section('contents')
<div class="container mx-auto p-4">
    <h1 class="mb-0 text-2xl font-bold">Edit Professeur</h1>
    <hr />
    <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <form action="{{ route('admin/professeurs/update', $professeur->id) }}" method="POST" class="sm:col-span-4">
                @csrf
                @method('PUT')
                <div>
                    <label for="Nom_Professeur" class="block text-sm font-medium leading-6 text-gray-900">Nom Professeur:</label>
                    <input type="text" required name="Nom_Professeur" id="Nom_Professeur" value="{{ $professeur->Nom_Professeur }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring focus:ring-green-600 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="Prenom_Professeur" class="block text-sm font-medium leading-6 text-gray-900">Prenom Professeur:</label>
                    <input type="text" required name="Prenom_Professeur" id="Prenom_Professeur" value="{{ $professeur->Prenom_Professeur }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring focus:ring-green-600 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="Date_Naissance" class="block text-sm font-medium leading-6 text-gray-900">Date Naissance :</label>
                    <input type="text" required name="Date_Naissance" id="Date_Naissance" value="{{ $professeur->Date_Naissance }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring focus:ring-green-600 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="Date_Recrutement" class="block text-sm font-medium leading-6 text-gray-900">Date Recrutement:</label>
                    <input type="text" required name="Date_Recrutement" id="Date_Recrutement" value="{{ $professeur->Date_Recrutement }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring focus:ring-green-600 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="function" class="block text-sm font-medium leading-6 text-gray-900">Function:</label>
                    <input type="text" required name="function" id="function" value="{{ $professeur->function }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring focus:ring-green-600 focus:ring-opacity-50">
                </div>
                <div>
                    <label class="block text-sm font-medium leading-6 text-gray-900">Situation Familiale</label>
                    <div class="mt-2">
                        <input id="marié" required name="situation_familiale" type="radio" value="marié" {{ $professeur->situation_familiale == 'marié' ? 'checked' : '' }}> <label for="marié">Marié</label><br>
                        <input id="célibataire" required name="situation_familiale" type="radio" value="célibataire" {{ $professeur->situation_familiale == 'célibataire' ? 'checked' : '' }}> <label for="célibataire">Célibataire</label>
                    </div>
                </div>
                <div>
                    <label for="Nombre_enfants" class="block text-sm font-medium leading-6 text-gray-900">Nombre enfants:</label>
                    <input type="text" required name="Nombre_enfants" id="Nombre_enfants" value="{{ $professeur->Nombre_enfants }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring focus:ring-green-600 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="secteur" class="block text-sm font-medium leading-6 text-gray-900">Secteur:</label>
                    <input type="text" required name="secteur" id="secteur" value="{{ $professeur->secteur }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring focus:ring-green-600 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="grade" class="block text-sm font-medium leading-6 text-gray-900">Grade:</label>
                    <input type="text" required name="grade" id="grade" value="{{ $professeur->grade }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring focus:ring-green-600 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="echelle" class="block text-sm font-medium leading-6 text-gray-900">Echelle:</label>
                    <input type="text" required name="echelle" id="echelle" value="{{ $professeur->echelle }}" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-green-600 focus:ring focus:ring-green-600 focus:ring-opacity-50">
                </div>
                <div>
                    <label class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                    <div class="mt-2">
                        <input id="active" required name="status" type="radio" value="active" {{ $professeur->status == 'active' ? 'checked' : '' }}> <label for="active">Active</label><br>
                        <input id="noactive" required name="status" type="radio" value="noactive" {{ $professeur->status == 'noactive' ? 'checked' : '' }}> <label for="noactive">NoActive</label>
                    </div>
                </div>
                <div class="">
                <button
            class="cursor-pointer  w-full justify-center mt-10  px-3 py-1.5 text-sm font-semibold leading-6  shadow-sm flex items-center fill-lime-400 bg-lime-950 hover:bg-lime-900 active:border active:border-lime-400 rounded-md duration-100 p-2"
            title="Save"
            
            >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20px"
                height="20px"
                viewBox="0 -0.5 25 25"
            >
                <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M18.507 19.853V6.034C18.5116 5.49905 18.3034 4.98422 17.9283 4.60277C17.5532 4.22131 17.042 4.00449 16.507 4H8.50705C7.9721 4.00449 7.46085 4.22131 7.08577 4.60277C6.7107 4.98422 6.50252 5.49905 6.50705 6.034V19.853C6.45951 20.252 6.65541 20.6407 7.00441 20.8399C7.35342 21.039 7.78773 21.0099 8.10705 20.766L11.907 17.485C12.2496 17.1758 12.7705 17.1758 13.113 17.485L16.9071 20.767C17.2265 21.0111 17.6611 21.0402 18.0102 20.8407C18.3593 20.6413 18.5551 20.2522 18.507 19.853Z"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
                ></path>
            </svg>
            <span class=" text-lime-400 pr-1 flex w-full justify-center ">Update Professeur</span>
            </button> 
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
