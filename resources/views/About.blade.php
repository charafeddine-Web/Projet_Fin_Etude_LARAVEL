@extends('layouts.user')
 
@section('title', 'About us')
 
@section('contents')
<div class="relative overflow-hidden ">
  <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
    <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
      <div class="sm:max-w-lg">
      <h1 class="max-w-2xl mb-6 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white"> OF<span class="bg-[#2bad3f] text-white px-2 rounded-md">PPT</span></h1>
        <p class="mt-4 text-xl text-gray-500">  est une solution de planification rationalisée conçue pour une gestion efficace du temps dans les contextes éducatifs et professionnels. Notre plateforme intuitive simplifie la création d’horaires, garantissant un accès et une coordination transparents. En mettant l’accent sur la réduction des conflits et l’amélioration de la productivité, notre service s’adapte à vos besoins organisationnels uniques, offrant un mélange harmonieux de précision et de simplicité.
      </div>
      <div>
        <div class="mt-10">
          <!-- Decorative image grid -->
          <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
            <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
              <div class="flex items-center space-x-6 lg:space-x-8">
                <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="/img-about/pht1.jpg" alt="" class="h-full w-full object-cover object-center">
                </div>
                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">

                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="/img-about/pht2.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="/img-about/pht3.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                </div>

                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="/img-about/pht4.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                  <div class="h-64 w-44 overflow-hidden rounded-lg">
                    <img src="/img-about/school2.jpg" alt="" class="h-full w-full object-cover object-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

