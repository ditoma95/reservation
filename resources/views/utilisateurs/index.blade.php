@extends('welcome')
@section('dimitri')

    <div class="flex items-center gap-8 ">
        <h1 class="text-xl  mb-4 font-bold ">Rechercher un trajet</h1>
        <button class="search mb-4 bous">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-8 h-8 text-white p-2 bg-green-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
        </button>
    </div>
    <div class="dims hidden">
        <form action=" {{ url('/') }} " method="GET">
            <div class="grid grid-cols-5 gap-4 bg-slate-800 p-4">
                <div>
                    <label for="" class="text-white mb-2 italic">lieu de départ</label>
                    <input type="text" class="w-full text-white bg-transparent rounded-lg font-bold" placeholder="lieu de depart" name="lieuDepart">
                </div>
                <div>
                    <label for="" class="text-white mb-2 italic">lieu arrivé</label>
                    <input type="text" class="w-full rounded-lg font-bold text-white bg-transparent" name="lieuArrive" placeholder="LieuArrivé">
                </div>
                <div>
                    <label for="" class="text-white mb-2 italic">heure de depart</label>
                    <input type="time"  class="w-full text-white bg-transparent rounded-lg font-bold" id="" name="heurDepart" placeholder="heure départ">
                </div>
                <div>
                    <label for="" class="text-white mb-2 italic">nombre de place</label>
                    <input type="text" class="w-full text-white bg-transparent rounded-lg font-bold" id="" name="nombrePlace" placeholder="nombre de place">
                </div>
                <div>
                    <label for="" class="text-white mb-2 italic">Tarif</label>
                    <input type="text" class="w-full text-white rounded-lg font-bold bg-transparent" id="" name="tarif" placeholder="prix du voyage">
                </div>
            </div>
            <div class="mt-4 flex">
                <button class="bg-green-700 p-2 m-auto hidden" type="submit">recherche</button>
            </div>
        </form>
    </div>

    <div class=" md:px-10 px-4 py-12 font-[sans-serif]">
        <div class="mx-auto ">
            <div class="flex justify-between items-center">
                <h2 class="mb-8 text-3xl font-extrabold text-gray-100">Nouveaux trajets de la semaines</h2>
                <h2 class="mb-8 text-3xl font-extrabold text-gray-100"><a href="{{ url('/') }}">Tous les trajets</a></h2>
            </div>


            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-4">
                @forelse ($trajets as $trajet)
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg">
                        <img src="{{ asset('storage/' . $trajet->voiture->voiture_image) }}" alt="Blog Post 1" class="object-cover w-full h-52" />
                        <div class="p-6">
                            <div class="flex items-center gap-8">
                                <h3 class="mb-2 text-md italic font-bold text-gray-800">Départ :  {{ $trajet->lieuDepart}}</h3>
                                <h3 class="mb-2 text-md italic font-bold text-gray-800">Arrivé :  {{ $trajet->lieuArrive}}</h3>
                            </div>

                            <div class="flex items-center gap-8">
                                <h3 class="mb-2 text-md italic font-bold text-gray-800">Hr départ :  {{ $trajet->heurDepart}}</h3>
                                <h3 class="mb-2 text-md italic font-bold text-gray-800">Dt départ :  {{ $trajet->dateDepart}}</h3>
                            </div>

                            <div class="flex items-center gap-8">
                                <h3 class="mb-2 text-mc italic font-bold text-gray-800">Nbre place :  {{ $trajet->voiture->nombrePlace}}</h3>
                                <h3 class="mb-2 text-md italic font-bold text-gray-800">Nbre_Place restant :  0</h3>
                            </div>

                            <div class="flex items-center gap-8">
                                <h3 class="mb-2 text-md italic font-bold text-gray-800">Tarif :  {{ $trajet->tarif}}</h3>
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
                                    <a href="{{ route('show', $trajet->id) }}" class="inline-block mt-4 text-sm text-blue-600 hover:underline">Read More</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <h1 class="text-9xl text-center">Aucun trajet disponible</h1>
                @endforelse
            </div>
        </div>
    </div>

    <script>
        let iconnes = document.querySelector('.search');
        let contenaier = document.querySelector('.dims');
        //console.log(iconnes, contenaier);

        iconnes.addEventListener('click', (e)=>{
            e.preventDefault();
            contenaier.classList.add('dm_vis');

        });
    </script>
@endsection
