@extends('layouts.user')
 
@section('title', 'About us')
 
@section('contents')
<div class="relative overflow-hidden ">
  <div class="pb-80 pt-16 sm:pb-40 sm:pt-24 lg:pb-48 lg:pt-40">
    <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
      <div class="sm:max-w-lg">
        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">ChronoCréatif </h1><br>
        <p class="mt-4 text-xl text-gray-500">ChronoCréatif is a streamlined scheduling solution tailored for efficient time management across educational and professional settings. Our intuitive platform simplifies timetable creation, ensuring seamless access and coordination. With a focus on conflict reduction and productivity enhancement, our service adapts to your unique organizational needs, delivering a harmonious blend of precision and ease.
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

