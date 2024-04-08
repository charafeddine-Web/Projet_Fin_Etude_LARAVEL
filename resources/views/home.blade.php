@extends('layouts.user')
 
@section('title', 'Home')
 
@section('contents')

<main class="container mx-auto py-20 px-4  "  >
    <div class="flex flex-row items-start justify-center ">
      <div class="w-full max-w-md text-center">
        <h2 class="font-bold text-4xl text-white mb-6">CHRONO<span class="bg-[#2bad3f] text-white px-2 rounded-md">CREATIF</span></h2>

        <p class="text-white mb-8">Read more →</p>
        <p class="text-white  mb-8">Welcome to ChronoCréatif, your trusted partner in time management. We are committed to simplifying and optimizing the way you plan, manage and track schedules within your organization. Whether you run a small business, school, or large enterprise, our intuitive and versatile platform is designed to meet your specific needs.</p>
        <p class="text-white mb-12">
       </p>
        </p>
        <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 bg-green-500 text-white font-bold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Get started</a>
        <a href="{{ route('About') }}" class="inline-flex items-center px-4 py-2 ml-4 text-green-500 font-bold border border-blue-500 rounded-lg hover:bg-green-100 hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Learn more →</a>
      </div>
    </div>
  </main>
  <!-- component -->

@endsection

