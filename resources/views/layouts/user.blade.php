<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <!--<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />-->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
 
<body class= "container  min-h-screen max-h-auto  bg-cover bg-center  " style="background-image: url('/backgrounde.png') ">
   <!-- <div >-->
    <div class="  min-h-screen max-h-auto  bg-cover bg-center ">
        <nav class=" ">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0 text-white  ">
                <h2 class="font-bold text-2xl">CHRONO<span class="bg-[#2bad3f] text-white px-2 rounded-md">CREATIF</span></h2>
                        
                        </div>
                    <div class="flex items-center">
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-12">
                                <a href="{{ url('/') }}" class="hover:text-green-600 hover:underline md:decoration-1 text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                                <a href="{{ route('emploi') }}" class="text-gray-300 hover:text-green-600 hover:underline md:decoration-1 px-3 py-2 rounded-md text-sm font-medium">Emploi</a>
                                <a href="{{ route('About') }}" class="text-gray-300 hover:text-green-600 hover:underline md:decoration-1 px-3 py-2 rounded-md text-sm font-medium">About</a>
                                <a href="{{ route('contact') }}" class="text-gray-300 hover:text-green-600 hover:underline md:decoration-1 block px-3 py-2 rounded-md text-base font-medium">Contact</a>
                            </div>
                        </div>
                    </div>
                      

                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            @if (Route::has('login'))
                            @auth
                            <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-black">
                                <span class="sr-only">View notifications</span>
                                <!-- Heroicon name: outline/bell -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                            </button>
                            <!-- Profile dropdown -->
                            <div x-data="{show: false}" x-on:click.away="show = false" class="ml-3 relative">
                                <div>
                                    <button x-on:click="show=!show" type="button" class="max-w-xs  rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-black" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="/admin.png" alt="">
                                        <div class="text-base font-medium leading-none text-white">{{ auth()->user()->name }}</div></br>
                                    </button>
                                </div>
                                <div x-show="show" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-black ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                    <a href="{{ route('userprofile') }}" class="block px-4 py-2 text-sm text-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
 
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
 
                                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                            </div>
                            @else
                            <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 ml-4 text-green-500 font-bold border border-blue-500 rounded-lg hover:bg-green-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Log in<span aria-hidden="true">&rarr;</span></a>
 
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 ml-4 text-green-500 font-bold border border-blue-500 rounded-lg  hover:bg-green-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Register<span aria-hidden="true">&rarr;</span></a>
                            @endif
                            @endauth
                            @endif
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden" >
                        <!-- Mobile menu button -->
                        
                        <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-black hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-black" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu" >
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <a href="{{ url('/') }}" class="   text-white  hover:bg-green-400 hover:text-white  block px-3 py-2 rounded-md text-base font-medium">Home</a>
                    <a href="{{ route('emploi') }}" class="text-gray-300  hover:bg-green-400 hover:text-white   block px-3 py-2 rounded-md text-base font-medium">Emploi</a>
                    <a href="{{ route('About') }}" class="text-gray-300   hover:bg-green-400 hover:text-white  block px-3 py-2 rounded-md text-base font-medium">About</a>
                    <a href="{{ route('contact') }}" class="text-gray-300  hover:bg-green-400 hover:text-white   block px-3 py-2 rounded-md text-base font-medium">Contact</a>

                </div>
                <div class="pt-4 pb-3 border-t border-gray-700">
                @if (Route::has('login'))
                @auth
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="/admin.png" alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">{{isset( auth()->user()->name )?"Admin":"" }}</div>
                            <div class="text-sm font-medium leading-none text-gray-400">{{isset(auth()->user()->email)?"":""  }}</div>
                        </div>
                        <button class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-black">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-3 px-2 space-y-1">
                        <a href="{{ route('userprofile') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Your Profile</a>
 
                        <a href="" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Settings</a>
 
                        <a href="{{ route('logout') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign out</a>
                    </div>
                </div>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 ml-4 text-green-500 hover:bg-green-400 hover:text-white font-bold border border-blue-500 rounded-lg  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Log in<span aria-hidden="true">&rarr;</span></a>
 
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 ml-4 text-green-500 hover:bg-green-400 hover:text-white font-bold border border-blue-500 rounded-lg  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Register<span aria-hidden="true">&rarr;</span></a>
                @endif
                @endauth
                @endif
            </div>
        </nav>
        <main>
            <div>@yield('contents')</div>
        </main>
    </div>
   
 
</body>
 
</html>