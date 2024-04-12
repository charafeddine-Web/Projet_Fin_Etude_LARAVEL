@extends('layouts.app')

@section('title', 'Home Professeur List')

@section('contents')
    <div class="">
        <h1 class="font-bold text-2xl ml-3">Home Professeur List</h1>
        <div class="flex items-center justify-center bg-grey-lighter">
            
           <form action="{{ route('SearchProfesseur') }}" method="GET">
                <div class="form-group  ">
                    <input type="text"name="keyword" id="keyword" value="{{ request('keyword') }}" class="w-full max-w-[160px] bg-white pl-2 text-base font-semibold outline-0" placeholder="" id="">
                    <input type="submit" value="Search" class="bg-blue-500 p-2 rounded-tr-lg rounded-br-lg text-white font-semibold hover:bg-blue-800 transition-colors">
                </div>
            </form>

            <div class="grid w-full max-w-xs items-center gap-1.5">
                    <input id="picture" type="file"
                        class="flex h-10 w-full rounded-md border border-input bg-gray-400 px-3 py-2 text-sm text-gray-400 file:border-0 file:bg-transparent file:text-gray-600 file:text-sm file:font-medium">
            </div>

            <a href="{{ route('admin/professeurs/create') }}"
                class="rounded-lg ml-10 relative w-10 h-10 cursor-pointer flex items-center border  bg-green-300 group hover:bg-green-500 ">
                <span class="absolute right-0 h-full w-10 rounded-lg bg-green-500 flex items-center justify-center ">
                    <svg class="svg w-8 text-white"fill="none" height="24" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round"stroke-width="2" viewBox="0 0 24 24" width="24"
                        xmlns="http://www.w3.org/2000/svg">
                        <line x1="12" x2="12" y1="5" y2="19"></line>
                        <line x1="5" x2="19" y1="12" y2="12"></line>
                    </svg>
                </span>
            </a>
        </div>
       
        <hr />
        @if (Session::has('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="overflow-x-auto overflow-y-auto">

            <table
                class="w-full overflow-x-auto shadow rounded-lg text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">id</th>
                        <th scope="col" class="px-6 py-3">Nom Professeur</th>
                        <th scope="col" class="px-6 py-3">Prenom Professeur</th>
                        <th scope="col" class="px-6 py-3">Date_Naissance</th>
                        <th scope="col" class="px-6 py-3">Date Recrutement</th>
                        <th scope="col" class="px-6 py-3">Function</th>
                        <th scope="col" class="px-6 py-3">Situation Familiale</th>
                        <th scope="col" class="px-6 py-3">Nombre d'enfants</th>
                        <th scope="col" class="px-6 py-3">Secteur</th>
                        <th scope="col" class="px-6 py-3">Grade</th>
                        <th scope="col" class="px-6 py-3">Echelle</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Action</th>


                    </tr>
                </thead>
                <tbody class=" min-w-full overflow-x-auto py-4 lg:overflow-x-hidden">
                    @if ($professeur->count() > 0)
                        @foreach ($professeur as $rs)
                            <tr
                                class=" border-b bg-[#f8f4f3]  dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                    {{ $loop->iteration }}
                                </th>
                                <td>
                                    {{ $rs->Nom_Professeur }}
                                </td>
                                <td>
                                    {{ $rs->Prenom_Professeur }}
                                </td>
                                <td>
                                    {{ $rs->Date_Naissance }}
                                </td>
                                <td>
                                    {{ $rs->Date_Recrutement }}
                                </td>
                                <td>
                                    {{ $rs->function }}
                                </td>
                                <td>
                                    {{ $rs->situation_familiale }}
                                </td>
                                <td>
                                    {{ $rs->Nombre_enfants }}
                                </td>
                                <td>
                                    {{ $rs->secteur }}
                                </td>
                                <td>
                                    {{ $rs->grade }}
                                </td>
                                <td>
                                    {{ $rs->echelle }}
                                </td>
                                <td>
                                    {{ $rs->status }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap w-full md:w-auto">
                                    <div class="h-14 pt-5 flex justify-center md:justify-start">
                                        <a href="{{ route('admin/professeurs/show', $rs->id) }}"
                                            class="text-blue-800">Detail</a>|
                                        <a href="{{ route('admin/professeurs/edit', $rs->id) }}"
                                            class="text-green-800 pl-2">Edit</a> |
                                        <form action="{{ route('admin/professeurs/destroy', $rs->id) }}" method="POST"
                                            onsubmit="return confirm('Delete?')" class="text-red-800">
                                            @csrf
                                            @method('DELETE')
                                            <button>Delete</button>
                                        </form>
                                    </div>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="5">Professeur not found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {{ $professeur->links() }}

        </div>
    </div>
@endsection
