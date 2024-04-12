@extends('layouts.app')
 
@section('title', 'Create Salle')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Add Salle :</h1>
<hr />
<div class="border-b border-gray-500/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <form action="{{ route('admin/salles/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Nom Salle</label>
                <div class="mt-2">
                    <input type="text" required name="Nom_Salle" id="Nom_Salle" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
 
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Type Salle</label>
                <div class="mt-2">
                    <select name="type_Salle" required id="type_Salle" class="form-select block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option value="Salles de classe">Salles de classe</option>
                        <option value="Laboratoires">Laboratoires</option>
                        <option value="Salles polyvalentes">Salles polyvalentes</option>
                        <option value="Ateliers">Ateliers</option>
                    </select>
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
            <span class=" text-lime-400 pr-1 flex w-full justify-center ">Save Salle</span>
            </button>        
        </form>
    </div>
</div>
@endsection