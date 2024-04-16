@extends('layouts.user')

@section('title', 'Home')

@section('contents')
    <section class="">
        <div class="  grid max-w-screen-xl lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7 ml-20 mb-20">
                <h1 class="max-w-2xl mb-6 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
                Bienvenue à l'OF<span class="bg-[#53ff43] text-white px-2 rounded-md">PPT</span></h1>
                <p class="max-w-2xl ml-6  font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400"> votre partenaire de confiance en matière de gestion du temps. Nous nous engageons à simplifier et à optimiser la façon dont vous planifiez, gérez et suivez les horaires au sein de votre organisation. Que vous dirigiez une petite entreprise, une école ou une grande entreprise, notre plateforme intuitive et polyvalente est conçue pour répondre à vos besoins spécifiques.</p>
                <!--<a href="{{ route('login') }}" class=" inline-flex items-center justify-center px-5 py-3 w-[150px] bg-black h-[50px] my-3 flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#009b49] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-[#fff]">
                    
                    </a>-->
                <a href="{{ route('login') }}"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3  text-base font-medium text-center text-white rounded-lg bg-black  focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900  rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#009b49] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-[#fff]">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="{{ route('About') }}"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Learn more →
                </a>
            </div>

            <div class="hidden lg:mt-8 lg:col-span-5 lg:flex ml-40">
                <img src="/img-about/emp-new.png" alt="mockup" class="w-45 skew-y-6 rounded-full">
            </div>

        </div>
    </section>
    <!--
    <main class=" "  >
         <div class="grid max-w-screen-xl lg:grid-cols-12">
         <div class="mr-auto ml-5 mb-20 place-self-center lg:col-span-7">
                    <h1 class="max-w-2xl mb-6 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">Welcome to OF<span class="bg-[#2bad3f] text-white px-2 rounded-md">PPT</span></h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400"> your trusted partner in time management. We are committed to simplifying and optimizing the way you plan, manage and track schedules within your organization. Whether you run a small business, school, or large enterprise, our intuitive and versatile platform is designed to meet your specific needs.</p>
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-5 py-3 mr-3 hover:bg-green-600 text-base font-medium text-center text-white rounded-lg bg-green-400  focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Get started
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                    <a href="{{ route('About') }}" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                       Learn more →
                    </a>
            </div>
            <div class="hidden lg:mt-9 lg:col-span-5 lg:flex ml-20" >
                <img src="/img-about/emp-new.png" alt="mockup" >
             </div>
        </div>
         
        </div>
      </main>-->
    <!-- component -->

@endsection
