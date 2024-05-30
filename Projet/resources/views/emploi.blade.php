@extends('layouts.user')

@section('title', 'Emploi')

@section('contents')

<main class="w-full">
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 ">

        <div class="px-4 py-20 sm:px-0">
            <h1 class="text-white text-center text-4xl font-bold mb-8 shadow-lg">Consulte Emploi du temps</h1>

            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96 p-6 ">
                <div class="relative mt-5 sm:mr-5 items-center flex justify-start ">
                    <label for="classe" class="mr-2 bg-gray-200 px-2 py-1 rounded-lg font-semibold">Groupe</label>
                    <select id="classe" name="classe"
                        class="border border-gray-300 bg-green-100 rounded-lg text-gray-600 h-10 pl-5 pr-10 hover:border-gray-400 focus:outline-none appearance-none">
                        <option>Choisissez une Groupe</option>
                        @if ($classes->isEmpty())
                        <option>No Classe Found</option>
                        @else
                        @foreach ($classes as $classe)
                        <option value="{{ $classe->id }}">
                            {{ $classe->Nom_Classe }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="border-4  border-gray-200 rounded-lg p-25 h-20 ">
                <h1 class="text-white text-center text-4xl font-bold mb-8 shadow-lg">IMAGE Emploi</h1>
                </div>
                <div class="items-center flex justify-end mt-40 ">
                    <h3 class="text-white text-center text-2xl font-bold mb-3 shadow-lg">Telecharge</h3>
                    <button
                        class="cursor-pointer bg-green-500 px-3 py-2 rounded-md text-black tracking-wider shadow-xl hover:animate-none">
                        
                        <svg class="w-5 h-5" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" stroke-linejoin="round"
                                stroke-linecap="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection