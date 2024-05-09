@extends('welcome')
@section('dimitri')

{{-- <div class="font-[sans-serif] mt-10">
    <div class="p-4 mx-auto lg:max-w-8xl sm:max-w-full">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-xl:gap-4 gap-6">
                @forelse ($trajets as $trajet)
                    <div class="bg-gray-50 shadow-md overflow-hidden rounded cursor-pointer hover:-translate-y-2 transition-all relative">
                        <div
                            class="bg-white w-10 h-10 flex items-center justify-center rounded-full cursor-pointer absolute top-3 right-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18px" class="fill-red-800 inline-block" viewBox="0 0 64 64">
                            <path
                                d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
                                data-original="#000000"></path>
                            </svg>
                        </div>

                        <div class="w-11/12 h-[240px] p-4 overflow-hidden mx-auto aspect-w-16 aspect-h-8 md:mb-2 mb-4">
                            <img src="{{ asset('storage/' . $trajet->voiture->voiture_image) }}">

                        </div>

                        <div class="p-6 bg-white">
                            <div class="flex justify-between mb-4 bg-black px-4 py-2 rounded-xl">
                                <h3 class="text-lg font-extrabold text-gray-800">
                                    <h3 class="text-white italic">Départ : </h3>
                                    <p class="text-yellow-400 font-bold"> {{ $trajet->lieuDepart}} </p>
                                </h3>

                                <h3 class="text-lg font-extrabold text-gray-800">
                                    <h3 class="text-white italic">Arrivé : </h3>
                                    <p class="text-yellow-400 font-bold">{{ $trajet->lieuArrive}}</p>
                                </h3>

                            </div>

                            <div>
                                <h3 class="text-lg font-extrabold text-gray-800">Heure départ :  {{ $trajet->heurDepart}}</h3>
                            </div>

                            <div>
                                <h3 class="text-lg font-extrabold text-gray-800">Date départ :  {{ $trajet->dateDepart}}</h3>
                            </div>

                            <div class="flex justify-between items-center">
                                <h4 class="text-lg text-gray-800 font-bold mt-2">Prix trajet principal :</h4>
                                <h4 class="text-xl text-green-900 font-bold mt-2">{{ $trajet->tarif}}f</h4>
                            </div>



                            <div class="flex  items-center justify-between mt-2">
                                <div class="flex space-x-2 mt-6">
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
                                    <a href="" class="bg-green-800 p-2 hover:bg-green-900 rounded-md text-yellow-400">details</a>
                                </div>
                            </div>



                        </div>

                    </div>
                @empty
                    <h1>Aucun trajet disponible</h1>
                @endforelse
            </div>
    </div>
</div> --}}

@endsection
