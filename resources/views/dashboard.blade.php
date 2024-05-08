@extends('layouts.app')

@section('title', 'Dashboard')

@section('contents')
<div class="container  min-h-screen max-h-auto">
    <div class="relative inline-flex mt-5">
        <select
            class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
            <option>Choose a Salle</option>
            @foreach ($salles as $salle)
            <option>{{ $salle->Nom_Salle }}</option>
            @endforeach
        </select>
    </div>

    <div class="relative inline-flex mt-5">
        <select
            class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
            <option>Choose a Professeur</option>
            @if ($professeurs->isEmpty())
            <option>No Professeur Found</option>
            @else
            @foreach ($professeurs as $professeur)
            <option>{{ $professeur->Nom_Professeur }}</option>
            @endforeach
            @endif
        </select>
    </div>

    <div class="relative inline-flex mt-5">
        <select
            class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
            <option>Choose a Classe</option>
            @if ($classes->isEmpty())
            <option>No Classe Found</option>
            @else
            @foreach ($classes as $classe)
            <option>{{ $classe->Nom_Classe }}</option>
            @endforeach
            @endif
        </select>
    </div>






    <div class="container mx-auto mt-10">
        <div class="wrapper bg-white rounded shadow w-full">
            <div class="header flex justify-between border-b p-2">
                <span class="text-lg font-bold">
                    2024 Mars
                </span>
                <div class="buttons">
                    <button class="p-1">
                        <svg width="1em" fill="gray" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path fill-rule="evenodd"
                                d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z" />
                            <path fill-rule="evenodd"
                                d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z" />
                        </svg>
                    </button>
                    <button class="p-1">
                        <svg width="1em" fill="gray" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path fill-rule="evenodd"
                                d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
                            <path fill-rule="evenodd"
                                d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="container mx-auto mt-10 table-container">
                <table class="w-full">
                    <thead>

                        <tr>
                            <th
                                class="p-2 border-r h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left ">
                                <span class="xl:block lg:block md:block sm:block hidden">Jour</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">J</span>
                                <hr>
                                <span class="xl:block lg:block md:block sm:block hidden">Horaire</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">H</span>
                            </th>

                            <th
                                class="p-2 border h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left ">
                                <span class="xl:block lg:block md:block sm:block hidden">8.30-9.30</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">8.30-9.30</span>

                            </th>
                            <th
                                class="p-2 border h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left ">
                                <span class="xl:block lg:block md:block sm:block hidden">9.30-10.30</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">9.30-10.30</span>

                            </th>
                            <th
                                class="p-2 border h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left ">
                                <span class="xl:block lg:block md:block sm:block hidden">10.30-11.30</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">10.30-11.30</span>

                            </th>
                            <th
                                class="p-2 border h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left ">
                                <span class="xl:block lg:block md:block sm:block hidden">11.30-12.30</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">11.30-12.30</span>

                            </th>
                            <th
                                class="p-2 border h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left ">
                                <span class="xl:block lg:block md:block sm:block hidden">12.30-13.30</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">12.30-13.30</span>

                            </th>
                            <th
                                class="p-2 border h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left ">
                                <span class="xl:block lg:block md:block sm:block hidden">13.30-14.30</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">13.30-14.30</span>

                            </th>
                            <th
                                class="p-2 border h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left ">
                                <span class="xl:block lg:block md:block sm:block hidden">14.30-15.30</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">14.30-15.30</span>

                            </th>
                            <th
                                class="p-2 border h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left ">
                                <span class="xl:block lg:block md:block sm:block hidden">15.30-16.30</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">15.30-16.30</span>

                            </th>
                            <th
                                class="p-2 border h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left ">
                                <span class="xl:block lg:block md:block sm:block hidden">16.30-17.30</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">16.30-17.30</span>

                            </th>
                            <th
                                class="p-2 border h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left ">
                                <span class="xl:block lg:block md:block sm:block hidden">17.30-18.30</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">17.30-18.30</span>

                            </th>
                            <hr>
                        </tr>



                        <tr>
                            <th
                                class="p-2 border-b h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left border  h-15 lg:w-30 md:w-30  overflow-auto transition  duration-500 ease bg-gray-300">
                                <span class="xl:block lg:block md:block sm:block hidden">Lundi</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Lun</span>
                            </th>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                <select
                                        class="rounded-full text-gray-600  border-none">
                                        <option>Choose a Module</option>
                                        @if ($modules->isEmpty())
                                        <option>No Classe Found</option>
                                        @else
                                        @foreach ($modules as $module)
                                        <option>{{ $module->nom_Module }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            
                        </tr>




                        <tr>
                            <th
                                class="p-2 border-r h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left border  h-15 lg:w-30 md:w-30  overflow-auto transition  duration-500 ease bg-gray-300">
                                <span class="xl:block lg:block md:block sm:block hidden">Mardi</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Mar</span>
                            </th>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                        </tr>






                        <tr>
                            <th
                                class="p-2 border-r h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left border  h-15 lg:w-30 md:w-30  overflow-auto transition  duration-500 ease bg-gray-300">
                                <span class="xl:block lg:block md:block sm:block hidden">Mercredi</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Mer</span>
                            </th>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                        </tr>




                        <tr>
                            <th
                                class="p-2 border-r h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left border  h-15 lg:w-30 md:w-30  overflow-auto transition  duration-500 ease bg-gray-300">
                                <span class="xl:block lg:block md:block sm:block hidden">jeudi</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Jeu</span>
                            </th>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                 
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                        </tr>




                        <tr>

                            <th
                                class="p-2 border-r h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left border  h-15 lg:w-30 md:w-30  overflow-auto transition  duration-500 ease bg-gray-300">
                                <span class="xl:block lg:block md:block sm:block hidden">Vendredi</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Ven</span>
                            </th>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                   
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                        </tr>




                        <tr>
                            <th
                                class="p-2 border-r h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left border  h-15 lg:w-30 md:w-30  overflow-auto transition  duration-500 ease bg-gray-300">
                                <span class="xl:block lg:block md:block sm:block hidden">Samedi</span>
                                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sam</span>
                            </th>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                            <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto  cursor-pointer ">
                                <div class="top h-5 w-full">
                                    <select class="text-gray-500 text-sm border-none">
                                        <option value="GE">CHosie Module</option>
                                        <option value="RT">GE</option>
                                        <option value="AG">GE</option>
                                        <option value="FR">GE</option>
                                        <option value="AN">GE</option>
                                    </select>
                                    <div class="bottom flex-grow h-30 py-1 w-full cursor-pointer"></div>
                                </div>
                            </td>
                        </tr>
                    </thead>
                   
                </table>
            </div>


            <div class="flex justify-end items-end">
                <button
                    class="cursor-pointer group relative flex gap-1.5 px-8 py-4 bg-green-600 bg-opacity-80 text-[#f1f1f1] rounded-3xl hover:bg-opacity-70 transition font-semibold shadow-md">enregistré</button>
            </div>
        </div>
        <hr>
    </div>



    <table class="border-collapse w-full mt-20 ">
        <thead>
            <tr>
                <th
                    class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                    Classe</th>
                <th
                    class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                    Emploi</th>
                <th
                    class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                    Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr
                class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                <td
                    class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                    <span
                        class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Classe
                    </span>
                    DD201
                </td>
                <td
                    class="w-full lg:w-auto p-3 text-gray-800  border border-b text-center block lg:table-cell relative lg:static">
                    <span
                        class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Emploi</span>
                    file
                </td>

                <td
                    class="w-full lg:w-auto p-3 text-gray-800  border border-b text-center block lg:table-cell relative lg:static">
                    <span
                        class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                    <a href="#" class="text-blue-400 hover:text-blue-600 underline">Edit</a>
                    <a href="#" class="text-blue-400 hover:text-blue-600 underline pl-6">Remove</a>
                </td>
            </tr>


        </tbody>
    </table>

    <!-- component afficher emploi du temps -->
</div>
@endsection