<x-app-layout>
    <div class="font-[sans-serif]">
        <div class="p-4 mx-auto lg:max-w-8xl sm:max-w-full">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-extrabold text-gray-800 mb-8">Listes des impression</h2>
                </div>
                <div>
                    <a href=" {{ route('impressions.create') }} " class="bg-green-700 p-2 rounded-md hover:bg-green-900 text-white">Ajouter une impression</a>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-xl:gap-4 gap-6">
                    @forelse ($impressions as $impression)
                        <div class="bg-gray-50 shadow-md overflow-hidden rounded cursor-pointer hover:-translate-y-2 transition-all relative">
                            {{-- <div
                                class="bg-white w-10 h-10 flex items-center justify-center rounded-full cursor-pointer absolute top-3 right-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" class="fill-red-800 inline-block" viewBox="0 0 64 64">
                                <path
                                    d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                    data-original="#000000"></path>
                                </svg>
                            </div>

                            <div class="w-11/12 h-[240px] p-4 overflow-hidden mx-auto aspect-w-16 aspect-h-8 md:mb-2 mb-4">
                                <img src="../img/cov.jpg" alt="Product 1" class="h-full w-full object-contain" />
                            </div> --}}

                            <div class="p-8 bg-white">
                                <div class="mb-5 bg-black px-7 py-4 rounded-xl">
                                    <div class="text-sm  text-gray-800 flex items-center" >
                                        <h3 class="text-white italic  " >Avis du service : </h3>
                                        <p class="text-yellow-400 font-bold"> {{ $impression->avisService}} </p>
                                    </div>

                                    <div class="text-sm  text-gray-800 flex items-center">
                                        <h3 class="text-white italic">Commentaire : </h3>
                                        <p class="text-yellow-400 font-bold">{{ $impression->commentaire}}</p>
                                    </div>

                                </div>

                                <div>
                                    <h3 class="text-lg font-extrabold text-gray-800">Date de l'avis : </h3> 
                                    <p class="text-yellow-400 font-bold">{{ $impression->dateAvis}}</p>
                                </div>

                               
                                <div class="flex mt-3 gap-8">
                                    <div>
                                        <a href=" {{ route('impressions.edit', $impression->id) }} " class="text-indigo-600 hover:text-indigo-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-700 cursor-pointer">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>
                                    </div>

                                    <div>
                                        <form action=" {{ route('trajets.destroy', $impression->id) }} " method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-700 cursor-pointer">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>

                                    <div>
                                        <a href=" {{ route('impressions.show', $impression->id) }} " class="text-indigo-600 hover:text-indigo-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-850 cursor-pointer">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    @empty
                        <h1>Aucune impression disponible</h1>
                    @endforelse
                </div>
        </div>
      </div>
</x-app-layout>



