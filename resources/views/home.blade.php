@extends('layouts.user')
 
@section('title', 'Home')
 
@section('contents')
<!--<div class="container mx-auto  px-4 ">
  <div class="container mx-auto  px-8">
    <div class="relative isolate overflow-hidden bg-black-900 px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
     
      <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">ChronoCréatif</h2>
        <p class="mt-6 text-lg leading-8 text-gray-300"> Welcome to ChronoCréatif, your trusted partner in time management. We are committed to simplifying and optimizing the way you plan, manage and track schedules within your organization. Whether you run a small business, school, or large enterprise, our intuitive and versatile platform is designed to meet your specific needs.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
          <a href="{{ route('login') }}" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get started</a>
          <a href="{{ route('About') }}" class="text-sm font-semibold leading-6 text-white">Learn more <span aria-hidden="true">→</span></a>
        </div>
      </div>
      
    </div>
  </div>
</div>-->

<main class="container mx-auto py-20 px-4  "  >
    <div class="flex flex-col items-center justify-center ">
      <div class="w-full max-w-md text-center">
        <h2 class="font-bold text-4xl text-white mb-6">CHRONO<span class="bg-[#2bad3f] text-white px-2 rounded-md">CREATIF</span></h2>

        <p class="text-white mb-8">Read more →</p>
        <p class="text-white font-medium mb-8">Welcome to ChronoCréatif, your trusted partner in time management. We are committed to simplifying and optimizing the way you plan, manage and track schedules within your organization. Whether you run a small business, school, or large enterprise, our intuitive and versatile platform is designed to meet your specific needs.</p>
        <p class="text-white mb-12">
       </p>
        </p>
        <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 bg-green-500 text-white font-bold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Get started</a>
        <a href="{{ route('About') }}" class="inline-flex items-center px-4 py-2 ml-4 text-green-500 font-bold border border-blue-500 rounded-lg hover:bg-green-100 hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Learn more →</a>
      </div>
    </div>
  </main>
@endsection

