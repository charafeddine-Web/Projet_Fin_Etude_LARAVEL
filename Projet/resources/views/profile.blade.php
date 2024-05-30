@extends('layouts.app')

@section('title', 'Profile')

@section('contents')

@if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
@endif

<hr />

<form enctype="multipart/form-data" action="{{ route('admin/profile/update', $user->id) }}" method="POST" class="max-w-lg mx-auto mt-6 bg-gray-200 shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
        <input name="name" id="name" type="text" value="{{ auth()->user()->name }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md px-4 py-2">
    </div>
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
        <input name="email" id="email" type="email" value="{{ auth()->user()->email }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md px-4 py-2">
    </div>
   
    <div class="flex justify-center">
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-sm text-black uppercase tracking-widest hover:bg-green-500 focus:outline-none focus:border-green-700 focus:ring focus:ring-green-200 disabled:opacity-25 transition">Save Profile</button>
    </div>
</form>

@endsection
