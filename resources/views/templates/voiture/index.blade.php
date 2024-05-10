<x-app-layout>
    <div class="font-[sans-serif]">
        <div class="p-4 mx-auto lg:max-w-8xl sm:max-w-full">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="mb-8 text-xl font-extrabold text-gray-800">Listes des voiture</h2>
                </div>
                <div>
                    <a href=" {{ route('voitures.create') }} " class="p-2 text-white bg-green-700 rounded-md hover:bg-green-900">Créer une voiture</a>
                </div>
            </div>


            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-xl:gap-4">
                    @forelse ($voitures as $voiture)
                        <div class="relative overflow-hidden transition-all rounded shadow-md cursor-pointer bg-gray-50 hover:-translate-y-2">
                            <div
                                class="absolute flex items-center justify-center w-10 h-10 bg-white rounded-full cursor-pointer top-3 right-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" class="inline-block fill-red-800" viewBox="0 0 64 64">
                                <path
                                    d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                    data-original="#000000"></path>
                                </svg>
                            </div>

                            <div class="w-11/12 h-[240px] p-4 overflow-hidden mx-auto aspect-w-16 aspect-h-8 md:mb-2 mb-4">
                                {{-- <img src="../img/cov.jpg" alt="Product 1" class="object-contain w-full h-full" /> --}}
                                <img src="{{ asset('storage/' . $voiture->voiture_image) }}">
                                {{-- @dd($voiture->voiture_image) --}}



                            </div>

                            <div class="p-6 bg-white">
                                <div>
                                    <h3 class="text-lg font-extrabold text-gray-800">Immatriculation :  {{ $voiture->immatriculation}}</h3>
                                </div>

                                <div>
                                    <h3 class="text-lg font-extrabold text-gray-800">Nombre de place :  {{ $voiture->nombrePlace}}</h3>
                                </div>





                                {{-- <div class="flex items-center justify-between mt-2">
                                    <div class="flex mt-6 space-x-2">
                                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                        </svg>
                                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                        </svg>
                                        <svg class="w-5 fill-[#facc15]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                        </svg>
                                        <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                        </svg>
                                        <svg class="w-5 fill-[#CED5D8]" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 0L9.4687 3.60213L13.6574 4.83688L10.9944 8.29787L11.1145 12.6631L7 11.2L2.8855 12.6631L3.00556 8.29787L0.342604 4.83688L4.5313 3.60213L7 0Z" />
                                        </svg>
                                    </div>

                                    <div>
                                        <a href="" class="p-2 text-yellow-400 bg-green-800 rounded-md hover:bg-green-900">details</a>
                                    </div>
                                </div> --}}



                                <div class="flex gap-8 mt-3">
                                    <div>
                                        <a href=" {{ route('voitures.edit', $voiture->id) }} " class="text-indigo-600 hover:text-indigo-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-700 cursor-pointer">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>
                                    </div>

                                    <div>
                                        <form action=" {{ route('voitures.destroy', $voiture->id) }} " method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-700 cursor-pointer">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>
                    @empty
                        <h1>Aucun voiture disponible</h1>
                    @endforelse
                </div>
        </div>
      </div>
</x-app-layout>
