<!--@extends('layouts.user')
 
@section('title', 'userprofile ')
 
@section('contents')

@if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif<hr />
<form  enctype="multipart/form-data" action="{{ route('userprofile/update', $user->id) }}" method="POST" class="flex flex-col items-center justify-center">
@csrf
@method('PUT')
    <div>
        <label class="label">
            <span class="text-base label-text">Name</span>
        </label>
        <input name="name" type="text" value="{{ auth()->user()->name }}" class="w-full input input-bordered" />
    </div>
    <div>
        <label class="label">
            <span class="text-base label-text">Email</span>
        </label>
        <input name="email" type="text" value="{{ auth()->user()->email }}" class="w-full input input-bordered" />
    </div>
    <div class="mt-6">
    <button type="submit" class="flex w-50% justify-center mt-10 rounded-md bg-green-500 px-3 py-1.5 text-sm font-semibold leading-6 text-black shadow-sm hover:bg-green-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-900">Save Profile</button>
    </div>
</form>
@endsection-->

