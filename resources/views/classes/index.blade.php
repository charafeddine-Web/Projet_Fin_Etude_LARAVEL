@extends('layouts.app')
 
@section('title', 'Home Classe List')
 
@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Home Classe List</h1>
    <a href="{{ route('admin/classes/create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Classe</a>
    <hr />
    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
 
    <table class="w-full overflow-x-auto shadow rounded-lg text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">id</th>
                <th scope="col" class="px-6 py-3">Nom Classe</th>
                <th scope="col" class="px-6 py-3">Annee Formation</th>
                <th scope="col" class="px-6 py-3">Mode Formation</th>
                <th scope="col" class="px-6 py-3">optimisé</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody class="min-w-full overflow-x-auto py-4 lg:overflow-x-hidden">
            @if($classe->count() > 0)
            @foreach($classe as $rs)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td>
                    {{ $rs->Nom_Classe }}
                </td>
                <td>
                    {{ $rs->Annee_Formation }}
                </td>
                <td>
                    {{ $rs->Mode_Formation }}
                </td>
                <td>
                    {{ $rs->optimisé }}
                </td>
                <td class="w-36">
                    <div class="h-14 pt-5">
                        <a href="{{ route('admin/classes/show', $rs->id) }}" class="text-blue-800">Detail</a>|
                        <a href="{{ route('admin/classes/edit', $rs->id)}}" class="text-green-800 pl-2">Edit</a> |
                        <form action="{{ route('admin/classes/destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="5">Classe not found</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection