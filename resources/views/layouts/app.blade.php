<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Traco') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/style.css">

        <!-- Styles -->
        <link rel="stylesheet" href="./css/tailwind.css">

        <style>[x-cloak] { display: none !important; }</style>

        <!-- Scripts -->
        <script defer src="https://unpkg.com/@alpinejs/collapse@3.4.2/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/script.js','resources/js/jq.js',])
        @livewireStyles
    </head>
    <body>
        <div   x-data="{ menuOpen: false }"  class="flex min-h-screen custom-scrollbar" >
            <!-- start::Black overlay -->
            <div :class="menuOpen ? 'block' : 'hidden'" @click="menuOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>
            <!-- end::Black overlay -->

            <aside  :class="menuOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"  class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 bg-gray-800 lg:translate-x-0 lg:inset-0 custom-scrollbar"  >
                <!-- start::Logo -->
                <div class="flex items-center justify-center h-16 bg-black bg-opacity-30">
                    <h1 class="text-lg font-bold tracking-widest text-gray-100 uppercase">
                        TRACO
                    </h1>
                </div>
                <!-- end::Logo -->

                <!-- start::Navigation -->
                <nav class="py-10 custom-scrollbar">
                    <!-- start::Menu link -->
                    <a x-data="{ linkHover: false }"  @mouseover = "linkHover = true" @mouseleave = "linkHover = false" href="{{ url('/') }}" class="flex items-center px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30"  >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class="linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span  class="ml-3 transition duration-200"  :class="linkHover ? 'text-gray-100' : ''" >
                            Accueil
                        </span>
                    </a>
                    <!-- end::Menu link -->
                    @if(auth()->user()->hasRole('super-admin|admin'))

                    <p class="px-6 mt-10 mb-2 text-xs text-gray-600 uppercase">Administration</p>

                    <!-- start::Menu link -->
                    <div x-data="{ linkHover: false, linkActive: false }" >
                        <div
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''" >

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                                <span class="ml-3">Admin</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>


                        <!-- start::Submenu -->
                        <ul  x-show="linkActive" x-cloak  x-collapse.duration.300ms class="text-gray-400" >
                            <!-- start::Submenu link -->
                                @if(auth()->user()->hasRole('super-admin'))
                                    <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                        <a  href="{{ route('roles.index') }}"  class="flex items-center" >
                                            <span class="mr-2 text-sm">&bull;</span>
                                            <span class="overflow-ellipsis">Roles</span>
                                        </a>
                                    </li>
                                @endif
                                <!-- end::Submenu link -->



                                <!-- start::Submenu link -->
                                @if(auth()->user()->hasRole('super-admin'))
                                    <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                        <a  href="{{ route('permissions.index') }}" class="flex items-center" >
                                            <span class="mr-2 text-sm">&bull;</span>
                                            <span class="overflow-ellipsis">Permissions</span>
                                        </a>
                                    </li>
                                @endif
                                <!-- end::Submenu link -->

                                <!-- start::Submenu link -->
                                @if(auth()->user()->hasRole('super-admin|admin'))
                                    <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                        <a  href="{{ route('users.index') }}" class="flex items-center" >
                                            <span class="mr-2 text-sm">&bull;</span>
                                            <span class="overflow-ellipsis">Users</span>
                                        </a>
                                    </li>
                                @endif
                                <!-- end::Submenu link -->
                            </ul>
                        {{-- @endif --}}

                        <!-- end::Submenu -->
                    </div>
                    @endif
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./pages/messages.html"
                        class="flex items-center px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class="linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                        <span
                            class="ml-3 transition duration-200"
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Messages
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./pages/calendar.html"
                        class="flex items-center px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class="linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span
                            class="ml-3 transition duration-200"
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Calendar
                        </span>
                    </a>

{{-- ------------------------------------------------------------------------------------Fonctionnalités---------------------------------------------------------------------------------- --}}


{{-- --------------------------------------------------------------trajet------------------------------------------------------------------------------- --}}
                    <p class="px-6 mt-10 mb-2 text-xs text-gray-600 uppercase">Fonctionnalités</p>


{{-- --------------------------------------------------------------Voitures------------------------------------------------------------------------------- --}}
                    <!-- start::Menu link -->
                    @if(auth()->user()->hasRole('super-admin|admin'))
                    <div x-data="{ linkHover: false, linkActive: false }" >
                        <div   @mouseover = "linkHover = true"  @mouseleave = "linkHover = false"  @click = "linkActive = !linkActive"  class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"  :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"  >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">Voitures</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul  x-show="linkActive" x-cloak x-collapse.duration.300ms class="text-gray-400" >
                            <!-- start::Submenu link -->
                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href=" {{ route('voitures.index') }} " class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Listes voitures</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href=" {{ route('voitures.create') }} " class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">créer une voiture</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    @endif

                    <!-- start::Menu link -->
                    @if(auth()->user()->hasRole('super-admin|admin'))
                    <div x-data="{ linkHover: false, linkActive: false }" >
                        <div   @mouseover = "linkHover = true"  @mouseleave = "linkHover = false"  @click = "linkActive = !linkActive"  class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"  :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"  >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">Trajet</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul  x-show="linkActive" x-cloak x-collapse.duration.300ms class="text-gray-400" >
                            <!-- start::Submenu link -->
                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="{{ route('trajets.index') }}" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">liste trajet</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="{{ route('trajets.create') }}" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">create</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    @endif


{{-- --------------------------------------------------------------Reservations------------------------------------------------------------------------------- --}}
                        <!-- start::Menu link -->
                        <div x-data="{ linkHover: false, linkActive: false }" >
                            <div   @mouseover = "linkHover = true"  @mouseleave = "linkHover = false"  @click = "linkActive = !linkActive"  class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"  :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"  >
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="ml-3">Reservations</span>
                                </div>
                                <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </div>
                            <!-- start::Submenu -->
                            <ul  x-show="linkActive" x-cloak x-collapse.duration.300ms class="text-gray-400" >
                                <!-- start::Submenu link -->
                                <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                    <a   href="{{ route('reservations.index') }}" class="flex items-center" >
                                        <span class="mr-2 text-sm">&bull;</span>
                                        <span class="overflow-ellipsis">Liste des reservations</span>
                                    </a>
                                </li>
                                <!-- end::Submenu link -->

                                <!-- start::Submenu link -->
                                <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                    <a   href="{{ route('reservations.create') }}" class="flex items-center" >
                                        <span class="mr-2 text-sm">&bull;</span>
                                        <span class="overflow-ellipsis">Create</span>
                                    </a>
                                </li>
                                <!-- end::Submenu link -->
                            </ul>
                            <!-- end::Submenu -->
                        </div>

{{-- --------------------------------------------------------------Conducteurs------------------------------------------------------------------------------- --}}
                    <!-- start::Menu link -->
                    {{-- <div x-data="{ linkHover: false, linkActive: false }" >
                        <div   @mouseover = "linkHover = true"  @mouseleave = "linkHover = false"  @click = "linkActive = !linkActive"  class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"  :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"  >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">Conducteurs</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>

                        <ul  x-show="linkActive" x-cloak x-collapse.duration.300ms class="text-gray-400" >

                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="./pages/ui/accordions.html" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Accordions</span>
                                </a>
                            </li>

                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="./pages/ui/alerts.html" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Alerts</span>
                                </a>
                            </li>

                        </ul>

                    </div> --}}


{{-- --------------------------------------------------------------Passagers------------------------------------------------------------------------------- --}}
                    <!-- start::Menu link -->
                    {{-- <div x-data="{ linkHover: false, linkActive: false }" >
                        <div   @mouseover = "linkHover = true"  @mouseleave = "linkHover = false"  @click = "linkActive = !linkActive"  class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"  :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"  >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">Passager</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>

                        <ul  x-show="linkActive" x-cloak x-collapse.duration.300ms class="text-gray-400" >

                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="./pages/ui/accordions.html" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Accordions</span>
                                </a>
                            </li>

                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="./pages/ui/alerts.html" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Alerts</span>
                                </a>
                            </li>

                        </ul>

                    </div> --}}





{{-- --------------------------------------------------------------Encaissers------------------------------------------------------------------------------- --}}
                    <!-- start::Menu link -->
                    @if(auth()->user()->hasRole('super-admin|admin'))
                    <div x-data="{ linkHover: false, linkActive: false }" >
                        <div   @mouseover = "linkHover = true"  @mouseleave = "linkHover = false"  @click = "linkActive = !linkActive"  class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"  :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"  >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">Encaisser</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul  x-show="linkActive" x-cloak x-collapse.duration.300ms class="text-gray-400" >
                            <!-- start::Submenu link -->
                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="./pages/ui/accordions.html" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Accordions</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="./pages/ui/alerts.html" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Alerts</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    @endif


{{-- --------------------------------------------------------------Impressions------------------------------------------------------------------------------- --}}
                    <!-- start::Menu link -->
                    <div x-data="{ linkHover: false, linkActive: false }" >
                        <div   @mouseover = "linkHover = true"  @mouseleave = "linkHover = false"  @click = "linkActive = !linkActive"  class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"  :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"  >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">Impressions</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul  x-show="linkActive" x-cloak x-collapse.duration.300ms class="text-gray-400" >
                            <!-- start::Submenu link -->
                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="{{ route('impressions.index') }}" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Liste de impressions</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="{{ route('impressions.create') }}" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">create</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>


{{-- --------------------------------------------------------------Reclamations------------------------------------------------------------------------------- --}}
                    <!-- start::Menu link -->
                    <div x-data="{ linkHover: false, linkActive: false }" >
                        <div   @mouseover = "linkHover = true"  @mouseleave = "linkHover = false"  @click = "linkActive = !linkActive"  class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"  :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"  >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">Réclamation</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul  x-show="linkActive" x-cloak x-collapse.duration.300ms class="text-gray-400" >
                            <!-- start::Submenu link -->
                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="./pages/ui/accordions.html" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Accordions</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="./pages/ui/alerts.html" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Alerts</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
{{-- --------------------------------------------------------------Pleinte------------------------------------------------------------------------------- --}}
                    <!-- start::Menu link -->
                    <div x-data="{ linkHover: false, linkActive: false }" >
                        <div   @mouseover = "linkHover = true"  @mouseleave = "linkHover = false"  @click = "linkActive = !linkActive"  class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"  :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"  >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">Pleinte</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul  x-show="linkActive" x-cloak x-collapse.duration.300ms class="text-gray-400" >
                            <!-- start::Submenu link -->
                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="./pages/ui/accordions.html" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Accordions</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="./pages/ui/alerts.html" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Alerts</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>

{{-- --------------------------------------------------------------Paiement------------------------------------------------------------------------------- --}}
                    <!-- start::Menu link -->
                    <div x-data="{ linkHover: false, linkActive: false }" >
                        <div   @mouseover = "linkHover = true"  @mouseleave = "linkHover = false"  @click = "linkActive = !linkActive"  class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"  :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"  >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">Paiement</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul  x-show="linkActive" x-cloak x-collapse.duration.300ms class="text-gray-400" >
                            <!-- start::Submenu link -->
                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="./pages/ui/accordions.html" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Accordions</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                                <a   href="./pages/ui/alerts.html" class="flex items-center" >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Alerts</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>

{{-- ---------------------------------------------------------------pages-------------------------------------------------------------------------------------------  --}}
                    <p class="px-6 mt-10 mb-2 text-xs text-gray-600 uppercase">Déconnexion</p>

                    <!-- start::Menu link -->
                    <div x-data="{ linkHover: false, linkActive: false }" >
                        <div   @mouseover = "linkHover = true" @mouseleave = "linkHover = false" @click = "linkActive = !linkActive"  class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30" :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"  >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                               <span class="ml-3">{{ Auth::user()->name }}</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul  x-show="linkActive" x-cloak x-collapse.duration.300ms class="mt-6 text-gray-400" >
                            <!-- start::Submenu link -->
                            <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-green-800 hover:bg-opacity-30 hover:text-gray-100">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a  href="route('logout')" class="flex items-center" >
                                        <span class="mr-2 text-sm">&bull;</span>
                                        {{-- <span class="overflow-ellipsis">se doconnecter</span> --}}
                                        <input type="submit" value="deconnexion">
                                    </a>



                                </form>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
<!--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

                    <!-- start::Menu link -->
                    {{-- <a   x-data="{ linkHover: false }" @mouseover = "linkHover = true"  @mouseleave = "linkHover = false" href="" class="flex items-center px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30" >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span   class="ml-3 transition duration-200"  :class="linkHover ? 'text-gray-100' : ''" >
                            Profile
                        </span>
                    </a> --}}
                    <!-- end::Menu link -->
                </nav>
                <!-- end::Navigation -->
            </aside>

            <div class="flex flex-col w-full lg:pl-64">
                <!-- start::Topbar -->
                <div class="flex flex-col">
                    <header class="fixed z-50 flex items-center justify-between w-full h-16 px-6 py-4 bg-white lg:w-full lg:px-64 sm:w-full">
                        <!-- start::Mobile menu button -->
                        <div class="flex items-center">
                            <button
                                @click="menuOpen = true"
                                class="text-gray-500 transition duration-200 hover:text-primary focus:outline-none lg:hidden"
                            >
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                            </button>
                        </div>
                        <!-- end::Mobile menu button -->

                        <!-- start::Right side top menu -->
                        <div class="flex items-center">
                            <!-- start::Search input -->
                            <form class="relative">
                                <input
                                    type="text"
                                    placeholder="Search..."
                                    class="w-48 py-2 pl-4 text-sm bg-gray-200 rounded-lg lg:w-72 focus:ring-0 focus:outline-none"
                                >
                                <button class="absolute right-2 top-2.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </button>
                            </form>
                            <!-- end::Search input -->

                            <!-- start::Notifications -->
                            <div
                            x-data="{ linkActive: false }"
                                class="relative mx-6"
                            >
                                <!-- start::Main link -->
                                <div
                                    @click="linkActive = !linkActive"
                                    class="flex cursor-pointer"
                                >
                                    <svg class="w-6 h-6 cursor-pointer hover:text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                                    <sub>
                                        <span class="bg-red-600 text-gray-100 px-1.5 py-0.5 rounded-full -ml-1 animate-pulse">
                                            4
                                        </span>
                                    </sub>
                                </div>
                                <!-- end::Main link -->

                                <!-- start::Submenu -->
                                <div
                                    x-show="linkActive"
                                    @click.away="linkActive = false"
                                    x-cloak
                                    class="absolute right-0 z-10 border border-gray-300 w-96 top-11"
                                >
                                    <!-- start::Submenu content -->
                                    <div class="overflow-y-scroll bg-white rounded max-h-96 custom-scrollbar">
                                        <!-- start::Submenu header -->
                                        <div class="flex items-center justify-between px-4 py-2">
                                            <span class="font-bold">Notifications</span>
                                            <span class="text-xs px-1.5 py-0.5 bg-red-600 text-gray-100 rounded">
                                                4 new
                                            </span>
                                        </div>
                                        <hr>
                                        <!-- end::Submenu header -->
                                        <!-- start::Submenu link -->
                                        <a
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between px-3 py-4 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-8 h-8 bg-primary bg-opacity-20 text-primary px-1.5 py-0.5 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                <div class="ml-3 text-sm">
                                                    <p
                                                        class="font-bold text-gray-600 capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Order Completed</p>
                                                    <p class="text-xs">Your order is completed</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                5 min ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between px-3 py-4 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <img
                                                    src="./assets/img/profile.jpg"
                                                    class="w-8 rounded-full"
                                                >
                                                <div class="ml-3 text-sm">
                                                    <p
                                                        class="font-bold text-gray-600 capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Maria sent you a message</p>
                                                    <p class="text-xs">Hey there, how are you do...</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                30 min ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between px-3 py-4 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-8 h-8 bg-primary bg-opacity-20 text-primary px-1.5 py-0.5 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                <div class="ml-3 text-sm">
                                                    <p
                                                        class="font-bold text-gray-600 capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Order Completed</p>
                                                    <p class="text-xs">Your order is completed</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                54 min ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between px-3 py-4 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <img
                                                    src="./assets/img/profile.jpg"
                                                    class="w-8 rounded-full"
                                                >
                                                <div class="ml-3 text-sm">
                                                    <p
                                                        class="font-bold text-gray-600 capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Maria sent you a message</p>
                                                    <p class="text-xs">Hey there, how are you do...</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                1 hour ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between px-3 py-4 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-8 h-8 bg-primary bg-opacity-20 text-primary px-1.5 py-0.5 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                <div class="ml-3 text-sm">
                                                    <p
                                                        class="font-bold text-gray-600 capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Order Completed</p>
                                                    <p class="text-xs">Your order is completed</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                15 hours ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between px-3 py-4 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <img
                                                    src="./assets/img/profile.jpg"
                                                    class="w-8 rounded-full"
                                                >
                                                <div class="ml-3 text-sm">
                                                    <p
                                                        class="font-bold text-gray-600 capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Maria sent you a message</p>
                                                    <p class="text-xs">Hey there, how are you do...</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                12 day ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between px-3 py-4 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-8 h-8 bg-primary bg-opacity-20 text-primary px-1.5 py-0.5 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                <div class="ml-3 text-sm">
                                                    <p
                                                        class="font-bold text-gray-600 capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Order Completed</p>
                                                    <p class="text-xs">Your order is completed</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                3 months ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between px-3 py-4 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <img
                                                    src="./assets/img/profile.jpg"
                                                    class="w-8 rounded-full"
                                                >
                                                <div class="ml-3 text-sm">
                                                    <p
                                                        class="font-bold text-gray-600 capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Maria sent you a message</p>
                                                    <p class="text-xs">Hey there, how are you do...</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                10 months ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                    </div>
                                    <!-- end::Submenu content -->
                                </div>
                                <!-- end::Submenu -->
                            </div>
                            <!-- end::Notifications -->

                            <!-- start::Profile -->
                            <div x-data="{ linkActive: false }" class="relative" >
                                <!-- start::Main link -->
                                <div   @click="linkActive = !linkActive"  class="mr-12 cursor-pointer" >


                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                            <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        </button>
                                    @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50">
                                                {{ Auth::user()->name }}

                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </button>
                                        </span>
                                    @endif
                                </div>
                                <!-- end::Main link -->
        {{-- --------------------------------------------------------------------------------------------------------------------------------------------------}}
                                <!-- start::Submenu -->
                                <div   x-show="linkActive"  @click.away="linkActive = false"  x-cloak  class="absolute right-0 z-20 w-40 border-gray-300 top-11"  >
                                    <!-- start::Submenu content -->
                                    <div class="bg-white rounded">
                                        <!-- start::Submenu link -->
                                        <a  x-data="{ linkHover: false }" href="./pages/profile.html" class="flex items-center justify-between px-3 py-2 hover:bg-gray-100 bg-opacity-20" @mouseover="linkHover = true"  @mouseleave="linkHover = false"  >
                                            <div class="flex items-center">
                                                <div>
                                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                                </div>
                                                <a href="{{ route('profile.show') }}">Profile</a>

                                            </div>


                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a   x-data="{ linkHover: false }" href="./pages/email/inbox.html" class="flex items-center justify-between px-3 py-2 hover:bg-gray-100 bg-opacity-20" @mouseover="linkHover = true" @mouseleave="linkHover = false" >
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                                <div class="ml-3 text-sm">
                                                    <p  class="font-bold text-gray-600 capitalize" :class=" linkHover ? 'text-primary' : ''" >
                                                        Inbox
                                                        <span class="bg-red-600 text-gray-100 text-xs px-1.5 py-0.5 ml-2 rounded">3</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a   x-data="{ linkHover: false }" href="./pages/settings.html" class="flex items-center justify-between px-3 py-2 hover:bg-gray-100 bg-opacity-20" @mouseover="linkHover = true" @mouseleave="linkHover = false" >
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                                <div class="ml-3 text-sm">
                                                    <p
                                                        class="font-bold text-gray-600 capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Settings</p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- end::Submenu link -->

                                        <hr>

                                    <!-- start::Submenu link -->
                                        <form method="POST" action="{{ route('logout') }}"  x-data="{ linkHover: false }"  class="flex items-center justify-between px-3 py-2 hover:bg-gray-100 bg-opacity-20"  @mouseover="linkHover = true"  @mouseleave="linkHover = false" >
                                            @csrf
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                                <x-dropdown-link href="{{ route('logout') }}"
                                                @click.prevent="$root.submit();">
                                                {{ __('deconnecter') }}
                                                </x-dropdown-link>
                                            </div>
                                        </form>
                                        <!-- end::Submenu link -->
                                    </div>
                                    <!-- end::Submenu content -->
                                </div>
                                <!-- end::Submenu -->
                            </div>
                            <!-- end::Profile -->
                        </div>
                        <!-- end::Right side top menu -->
                    </header>
                </div>
                <!-- end::Topbar -->

                <!-- start:Page content -->
                <div class="h-full mt-16 bg-gray-200">
                    <!-- start::Stats -->

                    <div class="w-full px-6 py-2 bg-gray-300">
                        {{ $slot }}
                    </div>
                </div>
                <!-- end:Page content -->
            </div>
        </div>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="../../js/jq.js"></script>
        <script src="../../js/script.js"></script>

        @stack('modals')
        @livewireScripts
    </body>
</html>
