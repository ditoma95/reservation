@extends('welcome')
@section('dimitri')


    <div class="grid grid-cols-6 gap-4">
        <div class="bg-gray-900 ">
            <input type="text" class="w-full">
        </div>
        <div class="bg-gray-900 ">
            <input type="text" class="w-full">
        </div>
        <div class="bg-gray-900 ">
            <input type="date" name="" class="w-full" id="">
        </div>
        <div class="bg-gray-900 ">
            <input type="time" name="" id="" class="w-full">
        </div>
        <div class="bg-gray-900 ">
            <input type="number" name="" id="" class="w-full">
        </div>
        <div class="bg-gray-900 ">
            <input type="number" name="" id="" class="w-full">
        </div>
    </div>

    <div class=" md:px-10 px-4 py-12 font-[sans-serif]">
        <div class="mx-auto ">
            <h2 class="mb-8 text-3xl font-extrabold text-gray-100">Nouveaux trajets de la semaines</h2>

            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-4">
                @forelse ($trajets as $trajet)
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                        <img src="{{ asset('storage/' . $trajet->voiture->voiture_image) }}" alt="Blog Post 1" class="object-cover w-full h-52" />
                        <div class="p-6">
                            <div class="flex items-center gap-8">
                                <h3 class="mb-2 text-xl italic font-bold text-gray-800">Départ :  {{ $trajet->lieuDepart}}</h3>
                                <h3 class="mb-2 text-xl italic font-bold text-gray-800">Départ :  {{ $trajet->lieuArrive}}</h3>
                            </div>

                            <div class="flex items-center gap-8">
                                <h3 class="mb-2 text-xl italic font-bold text-gray-800">Heure départ :  {{ $trajet->heurDepart}}</h3>
                                <h3 class="mb-2 text-xl italic font-bold text-gray-800">Dâte départ :  {{ $trajet->dateDepart}}</h3>
                            </div>

                            <div class="flex items-center gap-8">
                                <h3 class="mb-2 text-xl italic font-bold text-gray-800">Tarif :  {{ $trajet->tarif}}</h3>
                                <h3 class="mb-2 text-xl italic font-bold text-gray-800">Départ :  {{ $trajet->dateDepart}}</h3>
                            </div>

                            <div class="flex items-center gap-8">
                                <h3 class="mb-2 text-xl italic font-bold text-gray-800">Nbre place :  {{ $trajet->voiture->nombrePlace}}</h3>
                                <h3 class="mb-2 text-xl italic font-bold text-gray-800">Nbre place restant :  0</h3>
                            </div>

                            <div class="flex items-center justify-between mt-2">
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
                                    <a href="javascript:void(0);" class="inline-block mt-4 text-sm text-blue-600 hover:underline">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <h1>Aucun trajet disponible</h1>
                @endforelse
            </div>
        </div>
    </div>
@endsection
