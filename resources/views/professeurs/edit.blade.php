@extends('layouts.app')
 
@section('title', 'Edit Professeur')
 
@section('contents')
<h1 class="mb-0">Edit Professeur</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <form action="{{ route('admin/professeurs/update', $professeur->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Nom Professeur:</label>
                <div class="mt-2">
                    <input type="text"required name="Nom_Professeur" id="Nom_Professeur" value="{{ $professeur->Nom_Professeur }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Prenom Professeur:</label>
                <div class="mt-2">
                    <input type="text"required name="Prenom_Professeur" id="Prenom_Professeur" value="{{ $professeur->Prenom_Professeur }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Date Naissance :</label>
                <div class="mt-2">
                    <input type="text"required name="Date_Naissance" id="Date_Naissance" value="{{ $professeur->Date_Naissance }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Date Recrutement:</label>
                <div class="mt-2">
                    <input type="text"required name="Date_Recrutement" id="Date_Recrutement" value="{{ $professeur->Date_Recrutement }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">function:</label>
                <div class="mt-2">
                    <input id="function"required name="function" type="text" value="{{ $professeur->function }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Situation Familiale</label>
                <div class="mt-2">
                    <input id="situation_familiale"required name="situation_familiale" type="radio" value="{{ $professeur->situation_familiale }}" >marié<br>
                    <input id="situation_familiale"required name="situation_familiale" type="radio" value="{{ $professeur->situation_familiale }}" >Célibataire
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Nombre enfants:</label>
                <div class="mt-2">
                    <input id="Nombre_enfants" required name="Nombre_enfants" value="{{ $professeur->Nombre_enfants }}" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">secteur:</label>
                <div class="mt-2">
                    <input id="secteur" required name="secteur" value="{{ $professeur->secteur }}" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">grade:</label>
                <div class="mt-2">
                    <input id="grade" required name="grade" value="{{ $professeur->grade }}" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">echelle:</label>
                <div class="mt-2">
                    <input id="echelle" required name="echelle" value="{{ $professeur->echelle }}" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                <div class="mt-2">
                    <input id="status" required name="status" type="radio" value="{{ $professeur->status }}" >Active<br>
                    <input id="status"required name="status" type="radio" value="{{ $professeur->status }}"  >NoActive
                </div>
            </div>
            
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
        </form>
    </div>
</div>
@endsection