@extends('layouts.user')
 
@section('title', 'Emploi')
 
@section('contents')

<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 ">
        <div class="px-4 py-20 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 bg-green-100 rounded-lg h-96">
            <div class="relative inline-flex ">
                <h1>Choose a Classe:</h1>
                <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-gray-300 hover:border-gray-100 focus:outline-none appearance-none">
                    <option>Choose a Classe</option>
                    <option>DD201</option>
                    <option>EG101</option>
                    <option>DD101</option>
                </select>
            </div>
            <div>
                     <h1>emploi temps</h1>       
            </div>
            <div class="flex justify-end items-end ">
                <button class="cursor-pointer group relative flex gap-1.5 px-8 py-4 bg-black bg-opacity-80 text-[#f1f1f1] rounded-3xl hover:bg-opacity-70 transition font-semibold shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="24px" width="24px"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <g id="Interface / Download"> <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="#f1f1f1" d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12" id="Vector"></path> </g> </g></svg>
                Download
                <div class="absolute opacity-0 -bottom-full rounded-md py-2 px-2 bg-black bg-opacity-70 left-1/2 -translate-x-1/2 group-hover:opacity-100 transition-opacity shadow-lg">
                    Download
                </div>
                </button>
            </div>
            
            </div>
          
       </div>
</div>
</main>
@endsection