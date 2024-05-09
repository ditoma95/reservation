<x-app-layout>

    <div class="flex items-center justify-between mt-8 mb-6">
        <h1 class="text-2xl font-bold">Ajouter un trajet</h1>
        <div class="">
            <a href="{{ route('trajets.index') }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                Liste trajet
            </a>
        </div>
    </div>




    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('trajets.store') }}" method="post">
                        @csrf
                        <div class="grid grid-cols-6 gap-6">
                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="lieuDep" class="text-black">Lieu Départ</label>
                                <input required type="text" name="lieuDepart" placeholder="Lieu Départ">
                            </div>

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="lieuArr" class="text-black">Lieu Arrivé</label>
                                <input required type="text" name="lieuArrive" placeholder="Lieu Arrivé">
                            </div>

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="tarif" class="text-black">Tarif</label>
                                <input required type="number" name="tarif" placeholder="Tarif" min="0">
                            </div>

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="heureDep" class="text-black">Heure Départ</label>
                                <input required type="time" name="heurDepart" placeholder="Heure Départ">
                            </div>

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="dateDep" class="text-black">Date Départ</label>
                                <input required type="date" name="dateDepart">
                            </div>

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="lieuEscale" class="text-black">Lieu Escale</label>
                                <input required type="text" name="lieuEscale" placeholder="Lieu Escale">

                                {{-- <div class="flex items-center gap-4">
                                    <div>
                                        un 
                                    </div>
                                    <div>
                                        deux
                                    </div>

                                </div> --}}
                                
                            </div>

                            <div class="relative">
                                <label for="">Voiture</label>
                                <select name="voiture_id" class="block w-full px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                                    <option disabled>Immatriculation</option>
                                    @forelse ($voitures as $voiture)
                                        <option value="{{ $voiture->id }}">{{ $voiture->immatriculation }}</option>
                                    @empty
                                        <option value="" disabled>Aucune voiture disponible</option>
                                    @endforelse
                                </select>
                                {{-- <div class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                                  <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M10 12L4 6h12z"/>
                                  </svg>
                                </div> --}}
                            </div>
                              

                            

                            
                            {{-- ------------------------------------------------------------------------------------------------------------- --}}
                            {{-- <div class="flex flex-col w-full mx-auto space-y-4 lg:w-2/3 sm:flex-row lg:px-8 sm:space-x-2 sm:space-y-0 sm:px-0">
                                <div class="class="relative flex-grow w-full">
                                    <h1 class="mt-2 text-black">Fixer une place et son prix</h1>
                                    <div class="mt-6 bg-white lg:w-[25rem]">
                                        <input type="text" id="place" placeholder="Nom de la place" class="w-full px-3 py-1 mb-3 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200">
                                        <input type="number" id="prix" placeholder="prix : " class="w-full px-3 py-1 mb-3 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200">
                                        <button id="ajouterplace" class="flex m-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-red-700 hover:text-black">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="relative flex-grow w-full" id="ifnti">
                                    <h1 class="mt-2 text-center text-black">Listes des places & prix associés</h1>
                                    <ul id="terrainchamps" class="mt-2 bg-white">

                                    </ul>

                                </div>

                            </div> --}}


                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <input type="submit" value="update" class="p-2 text-white bg-green-800 rounded-md">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let niem_ipute = 0;
            const placeInput = document.getElementById("place");
            const prixTerplace = document.getElementById("prix");
            const ajouterButton = document.getElementById("ajouterplace");
            const terrainchamps = document.getElementById("terrainchamps");

            const chaineCaractere = /^[A-Za-z\s]+$/

            ajouterButton.addEventListener('click',(e) =>{
                e.preventDefault();
                const placeText = placeInput.value.trim();
                const placeTes = parseInt(prixTerplace.value);

                if (placeText.match(chaineCaractere) && placeTes != "" && placeTes > 0) {
                    niem_ipute++;
                    const listItem = document.createElement("li");
                    listItem.innerHTML = `
                        <input class="font-bold text-black " value="${placeText} ⇾ ${placeTes}" type="text" id="email" name="${niem_ipute}">

                        <button class="delete">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-800 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    `;


                    listItem.querySelector(".delete").addEventListener("click", () => {
                        listItem.remove();
                    });

                    terrainchamps.appendChild(listItem);

                    placeInput.value = "";
                    prixTerplace.value = "";
                }else{
                    alert("Veuillez saisir un texte valide");
                }
            });
        });
    </script>
</x-app-layout>
