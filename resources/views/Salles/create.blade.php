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
                    <input type="text" name="Nom_Salle" id="Nom_Salle" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
 
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Type Salle</label>
                <div class="mt-2">
                    <input id="type_Salle" name="type_Salle" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            
     <button type="submit" class="flex w-full justify-center bg-gray-700  items-center mt-10 rounded-md px-3 py-1.5 text-sm font-semibold  text-black   ">Submit</button>
        </form>
    </div>
</div>
@endsection