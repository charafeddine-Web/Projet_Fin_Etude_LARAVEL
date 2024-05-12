@extends('layouts.app')

@section('title', 'Dashboard')

@section('contents')
<div class="container  min-h-screen max-h-auto">
    <div class="flex flex-col sm:flex-row items-center justify-center">
        <form method="GET" action="{{ route('admin/emploi') }}">
            @csrf
            <div class="relative inline-flex  mt-5 sm:mr-5 items-center">
                <label for="classe" class="mr-2 bg-gray-200 px-2 py-1 rounded-lg font-semibold">Classe</label>
                <select id="classe" name="classe" onchange="this.form.submit()"
                    class="border border-gray-300 bg-green-100 rounded-lg text-gray-600 h-10 pl-5 pr-10 hover:border-gray-400 focus:outline-none appearance-none">
                    <option>Choisissez une classe</option>
                    @if ($classes->isEmpty())
                    <option>No Classe Found</option>
                    @else
                    @foreach ($classes as $classe)
                    <option value="{{ $classe->id }}" {{ Request::get('classe') == $classe->id ? 'selected' : '' }}>
                        {{ $classe->Nom_Classe }}</option>
                    @endforeach
                    @endif
                </select>

            </div>


            <div class="relative inline-flex sm:mr-5  mt-5 items-center">
                <label for="professeur" class="mr-2 bg-gray-200 px-2 py-1 rounded-lg font-semibold">
                    Professeur</label>
                <select id="professeur" name="professeur" onchange="this.form.submit()"
                    class="border border-gray-300 rounded-lg text-gray-600 h-10 pl-5 pr-10 bg-green-100   hover:border-gray-400 focus:outline-none appearance-none">
                    <option>Choose a Professeur</option>
                    @if ($professeurs->isEmpty())
                    <option>No Professeur Found</option>
                    @else
                    @foreach ($professeurs as $professeur)
                    <option value="{{ $professeur->id }}"
                        {{ Request::get('professeur') == $professeur->id ? 'selected' : '' }}>
                        {{ $professeur->Nom_Professeur }}</option>
                    @endforeach
                    @endif
                </select>
            </div>

            <div class="relative inline-flex sm:mr-5  mt-5 items-center">
                <label for="salle" class="mr-2 bg-gray-200 px-2 py-1 rounded-lg font-semibold"> Salle</label>
                <select id="salle" name="salle" onchange="this.form.submit()"
                    class="border border-gray-300 rounded-lg text-gray-600 h-10 pl-5 pr-10 bg-green-100   hover:border-gray-400 focus:outline-none appearance-none">
                    <option>Choose a Salle</option>
                    @if ($salles->isEmpty())
                    <option>No salles Found</option>
                    @else
                    @foreach ($salles as $salle)
                    <option value="{{ $salle->id }}" {{ Request::get('salle') == $salle->id ? 'selected' : '' }}>
                        {{ $salle->Nom_Salle }}</option>
                    @endforeach
                    @endif
                </select>
            </div>

            <div class="relative inline-flex sm:mr-5  mt-5 items-center">
                <label for="filiere" class="mr-2 bg-gray-200 px-2 py-1 rounded-lg font-semibold"> Filiere</label>
                <select id="filiere" name="filiere" onchange="this.form.submit()"
                    class="border border-gray-300 rounded-lg text-gray-600 h-10 pl-5 pr-10 bg-green-100   hover:border-gray-400 focus:outline-none appearance-none">
                    <option>Choose a Filiere</option>
                    @if ($filieres->isEmpty())
                    <option>No Filiere Found</option>
                    @else
                    @foreach ($filieres as $filiere)
                    <option value="{{ $filiere->id }}" {{ Request::get('filiere') == $filiere->id ? 'selected' : '' }}>
                        {{ $filiere->Nom_Filiere }}</option>
                    @endforeach
                    @endif

                </select>
            </div>

    </div>
    </form>

    <div class="container mx-auto mt-5 ">
        <div class="wrapper bg-white rounded shadow w-full">
            <div class=" rounded-lg">
                <div class="text-center">
                    <h1 class="text-3xl font-bold">ROYAUME DU MAROC OFFICE DE LA FORMATION PROFESSIONNELLE ET DE LA
                        PROMOTION DU TRAVAIL</h1>
                    <h3 class="text-2xl ">EMPLOI DU TEMPS</h3>
                    <h5>
                        Année de Formation
                        {{ \Carbon\Carbon::now()->format('Y') }}/{{ \Carbon\Carbon::now()->subYear()->format('Y') }}
                    </h5>
                </div>

                <div class="header flex flex-col justify-between border-b ">
                    <span class="text-l ">
                        EFP : <span class="font-bold">ISTA TAZA</span>
                    </span>
                    <span class="text-l ">
                        Période d'application : A PARTIR DU <input type="date" class="border-none font-bold rounded" />
                        jusqu'à <input type="date" class="border-none font-bold rounded" />
                    </span>
                    <span class="text-l flex items-center  ">
                        Filiére :
                        <span class="font-bold">
                            {{ $filieres->where('id', Request::get('filiere'))->first()->Nom_Filiere ?? 'Aucune Filiere sélectionnée' }}
                        </span>
                    </span>
                    <span class="text-l flex items-center mt-2">
                        Groupe :
                        <span class="font-bold">
                            {{ $classes->where('id', Request::get('classe'))->first()->Nom_Classe ?? 'Aucune classe sélectionnée' }}
                        </span>
                    </span>
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



                            @for ($i = 0; $i < 10; $i++) @if ($i==4) <td
                                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                                </td>
                                @else
                                <td class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                                    <button class="openFormBtn text-black font-bold py-2 px-4 rounded">
                                        Add Event
                                    </button>
                                </td>
                                @endif
                                @endfor


                                <!-- Form for selecting modules, professors, and rooms -->
                                @for ($i = 0; $i < 10; $i++) <div
                                    class="formModal modal fixed inset-0 flex items-center justify-center z-50 hidden">
                                    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

                                    <div
                                        class="modal-container bg-white w-full md:max-w-lg mx-auto rounded shadow-lg z-50 overflow-y-auto">
                                        <!-- Your form content -->
                                        <div class="modal-content py-4 px-6">
                                            <h2 class="text-xl font-bold mb-4">Select Module, Professeur, Salle, and
                                                Mode</h2>
                                            <div class="top w-full">
                                                <select
                                                    class="moduleSelect text-gray-600 w-full border-none cursor-pointer">
                                                    <option value="">Module</option>
                                                    @foreach ($modules as $module)
                                                    <option value="{{ $module->nom_Module }}">{{ $module->nom_Module }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <hr class="my-2">
                                            <div class="top w-full">
                                                <select
                                                    class="profSelect text-gray-600 w-full cursor-pointer border-none">
                                                    <option value="">Professeur</option>
                                                    @foreach ($professeurs as $professeur)
                                                    <option value="{{ $professeur->Nom_Professeur }}">
                                                        {{ $professeur->Nom_Professeur }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <hr class="my-2">
                                            <div class="top w-full">
                                                <select
                                                    class="salleSelect text-gray-600 w-full cursor-pointer border-none">
                                                    <option value="">Salle</option>
                                                    @foreach ($salles as $salle)
                                                    <option value="{{ $salle->Nom_Salle }}">{{ $salle->Nom_Salle }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <hr class="my-2">
                                            <div class="top w-full">
                                                <select
                                                    class="modeSelect text-gray-600 w-full cursor-pointer border-none">
                                                    <option value="">Mode Formation</option>
                                                    <option value="FAD">FAD</option>
                                                    <option value="PRES">PRES</option>
                                                </select>
                                            </div>
                                            <div class="text-right mt-4">
                                                <button
                                                    class="addBtn bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                                    Add
                                                </button>
                                                <button
                                                    class="closeFormBtn bg-red-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded ml-2">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
            </div>
            @endfor
            </tr>





            <tr>
                <th
                    class="p-2 border-r h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left border  h-15 lg:w-30 md:w-30  overflow-auto transition  duration-500 ease bg-gray-300">
                    <span class="xl:block lg:block md:block sm:block hidden">Mardi</span>
                    <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Mar</span>
                </th>


                @for ($i = 0; $i < 10; $i++) @if ($i==4) <td
                    class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                    </td>
                    @else
                    <td class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                        <button class="openFormBtn text-black font-bold py-2 px-4 rounded">
                            Add Event
                        </button>
                    </td>
                    @endif
                    @endfor


                    <!-- Form for selecting modules, professors, and rooms -->
                    @for ($i = 0; $i < 10; $i++) <div
                        class="formModal modal fixed inset-0 flex items-center justify-center z-50 hidden">
                        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

                        <div
                            class="modal-container bg-white w-full md:max-w-lg mx-auto rounded shadow-lg z-50 overflow-y-auto">
                            <!-- Your form content -->
                            <div class="modal-content py-4 px-6">
                                <h2 class="text-xl font-bold mb-4">Select Module, Professeur, Salle, and
                                    Mode</h2>
                                <div class="top w-full">
                                    <select class="moduleSelect text-gray-600 w-full border-none cursor-pointer">
                                        <option value="">Module</option>
                                        @foreach ($modules as $module)
                                        <option value="{{ $module->nom_Module }}">{{ $module->nom_Module }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <hr class="my-2">
                                <div class="top w-full">
                                    <select class="profSelect text-gray-600 w-full cursor-pointer border-none">
                                        <option value="">Professeur</option>
                                        @foreach ($professeurs as $professeur)
                                        <option value="{{ $professeur->Nom_Professeur }}">
                                            {{ $professeur->Nom_Professeur }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <hr class="my-2">
                                <div class="top w-full">
                                    <select class="salleSelect text-gray-600 w-full cursor-pointer border-none">
                                        <option value="">Salle</option>
                                        @foreach ($salles as $salle)
                                        <option value="{{ $salle->Nom_Salle }}">{{ $salle->Nom_Salle }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <hr class="my-2">
                                <div class="top w-full">
                                    <select class="modeSelect text-gray-600 w-full cursor-pointer border-none">
                                        <option value="">Mode Formation</option>
                                        <option value="FAD">FAD</option>
                                        <option value="PRES">PRES</option>
                                    </select>
                                </div>
                                <div class="text-right mt-4">
                                    <button
                                        class="addBtn bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                        Add
                                    </button>
                                    <button
                                        class="closeFormBtn bg-red-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded ml-2">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
        </div>
        @endfor
        </tr>






        <tr>
            <th
                class="p-2 border-r h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left border  h-15 lg:w-30 md:w-30  overflow-auto transition  duration-500 ease bg-gray-300">
                <span class="xl:block lg:block md:block sm:block hidden">Mercredi</span>
                <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Mer</span>
            </th>
            @for ($i = 0; $i < 10; $i++) @if ($i==4) <td
                class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                </td>
                @else
                <td class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                    <button class="openFormBtn text-black font-bold py-2 px-4 rounded">
                        Add Event
                    </button>
                </td>
                @endif
                @endfor


                <!-- Form for selecting modules, professors, and rooms -->
                @for ($i = 0; $i < 10; $i++) <div
                    class="formModal modal fixed inset-0 flex items-center justify-center z-50 hidden">
                    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

                    <div
                        class="modal-container bg-white w-full md:max-w-lg mx-auto rounded shadow-lg z-50 overflow-y-auto">
                        <!-- Your form content -->
                        <div class="modal-content py-4 px-6">
                            <h2 class="text-xl font-bold mb-4">Select Module, Professeur, Salle, and
                                Mode</h2>
                            <div class="top w-full">
                                <select class="moduleSelect text-gray-600 w-full border-none cursor-pointer">
                                    <option value="">Module</option>
                                    @foreach ($modules as $module)
                                    <option value="{{ $module->nom_Module }}">{{ $module->nom_Module }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <hr class="my-2">
                            <div class="top w-full">
                                <select class="profSelect text-gray-600 w-full cursor-pointer border-none">
                                    <option value="">Professeur</option>
                                    @foreach ($professeurs as $professeur)
                                    <option value="{{ $professeur->Nom_Professeur }}">
                                        {{ $professeur->Nom_Professeur }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <hr class="my-2">
                            <div class="top w-full">
                                <select class="salleSelect text-gray-600 w-full cursor-pointer border-none">
                                    <option value="">Salle</option>
                                    @foreach ($salles as $salle)
                                    <option value="{{ $salle->Nom_Salle }}">{{ $salle->Nom_Salle }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <hr class="my-2">
                            <div class="top w-full">
                                <select class="modeSelect text-gray-600 w-full cursor-pointer border-none">
                                    <option value="">Mode Formation</option>
                                    <option value="FAD">FAD</option>
                                    <option value="PRES">PRES</option>
                                </select>
                            </div>
                            <div class="text-right mt-4">
                                <button
                                    class="addBtn bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    Add
                                </button>
                                <button
                                    class="closeFormBtn bg-red-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded ml-2">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
    </div>
    @endfor
    </tr>




    <tr>
        <th
            class="p-2 border-r h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left border  h-15 lg:w-30 md:w-30  overflow-auto transition  duration-500 ease bg-gray-300">
            <span class="xl:block lg:block md:block sm:block hidden">jeudi</span>
            <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Jeu</span>
        </th>

        @for ($i = 0; $i < 10; $i++) @if ($i==4) <td
            class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
            </td>
            @else
            <td class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
                <button class="openFormBtn text-black font-bold py-2 px-4 rounded">
                    Add Event
                </button>
            </td>
            @endif
            @endfor


            <!-- Form for selecting modules, professors, and rooms -->
            @for ($i = 0; $i < 10; $i++) <div
                class="formModal modal fixed inset-0 flex items-center justify-center z-50 hidden">
                <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

                <div class="modal-container bg-white w-full md:max-w-lg mx-auto rounded shadow-lg z-50 overflow-y-auto">
                    <!-- Your form content -->
                    <div class="modal-content py-4 px-6">
                        <h2 class="text-xl font-bold mb-4">Select Module, Professeur, Salle, and
                            Mode</h2>
                        <div class="top w-full">
                            <select class="moduleSelect text-gray-600 w-full border-none cursor-pointer">
                                <option value="">Module</option>
                                @foreach ($modules as $module)
                                <option value="{{ $module->nom_Module }}">{{ $module->nom_Module }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <hr class="my-2">
                        <div class="top w-full">
                            <select class="profSelect text-gray-600 w-full cursor-pointer border-none">
                                <option value="">Professeur</option>
                                @foreach ($professeurs as $professeur)
                                <option value="{{ $professeur->Nom_Professeur }}">
                                    {{ $professeur->Nom_Professeur }}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr class="my-2">
                        <div class="top w-full">
                            <select class="salleSelect text-gray-600 w-full cursor-pointer border-none">
                                <option value="">Salle</option>
                                @foreach ($salles as $salle)
                                <option value="{{ $salle->Nom_Salle }}">{{ $salle->Nom_Salle }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <hr class="my-2">
                        <div class="top w-full">
                            <select class="modeSelect text-gray-600 w-full cursor-pointer border-none">
                                <option value="">Mode Formation</option>
                                <option value="FAD">FAD</option>
                                <option value="PRES">PRES</option>
                            </select>
                        </div>
                        <div class="text-right mt-4">
                            <button
                                class="addBtn bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Add
                            </button>
                            <button
                                class="closeFormBtn bg-red-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded ml-2">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
</div>
@endfor




</tr>




<tr>

    <th
        class="p-2 border-r h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left border  h-15 lg:w-30 md:w-30  overflow-auto transition  duration-500 ease bg-gray-300">
        <span class="xl:block lg:block md:block sm:block hidden">Vendredi</span>
        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Ven</span>
    </th>
    @for ($i = 0; $i < 10; $i++) @if ($i==4) <td
        class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
        </td>
        @else
        <td class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
            <button class="openFormBtn text-black font-bold py-2 px-4 rounded">
                Add Event
            </button>
        </td>
        @endif
        @endfor


        <!-- Form for selecting modules, professors, and rooms -->
        @for ($i = 0; $i < 10; $i++) <div
            class="formModal modal fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

            <div class="modal-container bg-white w-full md:max-w-lg mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <!-- Your form content -->
                <div class="modal-content py-4 px-6">
                    <h2 class="text-xl font-bold mb-4">Select Module, Professeur, Salle, and
                        Mode</h2>
                    <div class="top w-full">
                        <select class="moduleSelect text-gray-600 w-full border-none cursor-pointer">
                            <option value="">Module</option>
                            @foreach ($modules as $module)
                            <option value="{{ $module->nom_Module }}">{{ $module->nom_Module }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <hr class="my-2">
                    <div class="top w-full">
                        <select class="profSelect text-gray-600 w-full cursor-pointer border-none">
                            <option value="">Professeur</option>
                            @foreach ($professeurs as $professeur)
                            <option value="{{ $professeur->Nom_Professeur }}">
                                {{ $professeur->Nom_Professeur }}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr class="my-2">
                    <div class="top w-full">
                        <select class="salleSelect text-gray-600 w-full cursor-pointer border-none">
                            <option value="">Salle</option>
                            @foreach ($salles as $salle)
                            <option value="{{ $salle->Nom_Salle }}">{{ $salle->Nom_Salle }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <hr class="my-2">
                    <div class="top w-full">
                        <select class="modeSelect text-gray-600 w-full cursor-pointer border-none">
                            <option value="">Mode Formation</option>
                            <option value="FAD">FAD</option>
                            <option value="PRES">PRES</option>
                        </select>
                    </div>
                    <div class="text-right mt-4">
                        <button class="addBtn bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Add
                        </button>
                        <button
                            class="closeFormBtn bg-red-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded ml-2">
                            Close
                        </button>
                    </div>
                </div>
            </div>
            </div>
            @endfor


</tr>




<tr>
    <th
        class="p-2 border-r h-20 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs text-left border  h-15 lg:w-30 md:w-30  overflow-auto transition  duration-500 ease bg-gray-300">
        <span class="xl:block lg:block md:block sm:block hidden">Samedi</span>
        <span class="xl:hidden lg:hidden md:hidden sm:hidden block">Sam</span>
    </th>

    @for ($i = 0; $i < 10; $i++) @if ($i==4) <td
        class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
        </td>
        @else
        <td class="border p-1 h-15 xl:w-20 lg:w-30 md:w-30 sm:w-20 w-10 overflow-auto">
            <button class="openFormBtn text-black font-bold py-2 px-4 rounded">
                Add Event
            </button>
        </td>
        @endif
        @endfor


        <!-- Form for selecting modules, professors, and rooms -->
        @for ($i = 0; $i < 10; $i++) <div
            class="formModal modal fixed inset-0 flex items-center justify-center z-50 hidden">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

            <div class="modal-container bg-white w-full md:max-w-lg mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <!-- Your form content -->
                <div class="modal-content py-4 px-6">
                    <h2 class="text-xl font-bold mb-4">Select Module, Professeur, Salle, and
                        Mode</h2>
                    <div class="top w-full">
                        <select class="moduleSelect text-gray-600 w-full border-none cursor-pointer">
                            <option value="">Module</option>
                            @foreach ($modules as $module)
                            <option value="{{ $module->nom_Module }}">{{ $module->nom_Module }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <hr class="my-2">
                    <div class="top w-full">
                        <select class="profSelect text-gray-600 w-full cursor-pointer border-none">
                            <option value="">Professeur</option>
                            @foreach ($professeurs as $professeur)
                            <option value="{{ $professeur->Nom_Professeur }}">
                                {{ $professeur->Nom_Professeur }}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr class="my-2">
                    <div class="top w-full">
                        <select class="salleSelect text-gray-600 w-full cursor-pointer border-none">
                            <option value="">Salle</option>
                            @foreach ($salles as $salle)
                            <option value="{{ $salle->Nom_Salle }}">{{ $salle->Nom_Salle }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <hr class="my-2">
                    <div class="top w-full">
                        <select class="modeSelect text-gray-600 w-full cursor-pointer border-none">
                            <option value="">Mode Formation</option>
                            <option value="FAD">FAD</option>
                            <option value="PRES">PRES</option>
                        </select>
                    </div>
                    <div class="text-right mt-4">
                        <button class="addBtn bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Add
                        </button>
                        <button
                            class="closeFormBtn bg-red-500 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded ml-2">
                            Close
                        </button>
                    </div>
                </div>
            </div>
            </div>
            @endfor
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
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Classe</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Emploi</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">
                Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr
            class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td
                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Classe
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

</div>
@endsection