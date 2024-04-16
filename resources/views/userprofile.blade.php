 @extends('layouts.user')
 
@section('title', 'userprofile ')
 
@section('contents')

    <div class="max-w-md mx-auto relative overflow-hidden z-10  bg-gray-800 p-8 rounded-lg shadow-md before:w-24 before:h-24 before:absolute before:bg-purple-600 before:rounded-full before:-z-10 before:blur-2xl after:w-32 after:h-32 after:absolute after:bg-sky-400 after:rounded-full after:-z-10 after:blur-xl after:top-24 after:-right-12">
  
@if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
  <h2 class="text-2xl font-bold text-white ">Update Your Profile</h2>

  <form  enctype="multipart/form-data" action="{{ route('userprofile/update', $user->id) }}" method="POST" class="flex flex-col items-center justify-center">
    @csrf
    @method('PUT')
    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-300" for="name"
        >Full Name</label
      >
      <input
      name="name"
      value="{{ auth()->user()->name }}"
        class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded-md text-white"
        type="text"
      />
    </div>

    <div class="mb-4">
      <label class="block text-sm font-medium text-gray-300" for="email"
        >Email Address</label
      >
      <input
      value="{{ auth()->user()->email }}"
        class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded-md text-white"
        name="email"
        id="email"
        type="email"
      />
    </div>


    <div class="">
      <button
        class="flex justify-end to-blue-500 text-white px-4 py-2 font-bold rounded-md hover:opacity-80"
        type="submit"
      >
        Update Profile
      </button>
      
    </div>
    <a href="{{route('home')}}"
        class=" to-blue-500 text-white px-4 py-2 font-bold rounded-md hover:opacity-80"
        type="submit"
      >
        Back
      </a>
  </form>
</div>

@endsection

