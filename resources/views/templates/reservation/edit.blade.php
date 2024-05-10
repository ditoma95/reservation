<x-app-layout>

    <div class="flex items-center justify-between mt-8 mb-6">
        <h1 class="text-2xl font-bold">Modifier une reservation</h1>
        <div class="">
            <a href="{{ route('reservations.index') }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                Liste des reservations
            </a>
        </div>
    </div>




    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('reservations.update', $reservation->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-6 gap-6">

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="dateDepart" class="text-black">Date Départ</label>
                                <input required type="date" name="dateDepart" value="@php if (!empty($reservation)){echo $reservation->dateDepart;} @endphp">
                            </div>


                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="lieuDepart" class="text-black">Lieu Départ</label>
                                <input required type="text" name="lieuDepart" placeholder="Lieu Départ" value="@php if (!empty($reservation)){echo $reservation->lieuDepart;} @endphp">
                            </div>

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="lieuArrive" class="text-black">Lieu Arrivé</label>
                                <input required type="text" name="lieuArrive" placeholder="Lieu Arrivé" value="@php if (!empty($reservation)){echo $reservation->lieuArrive;} @endphp">
                            </div>

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="heurDepart" class="text-black">Heure Départ</label>
                                <input required type="time" name="heurDepart" placeholder="Heure Départ" value="@php if (!empty($reservation)){echo $reservation->heurDepart;} @endphp">
                            </div>

                            

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="nombrePlace" class="text-black">Nombre de place</label>
                                <input required type="number" name="nombrePlace" placeholder="Nbre de place"  min="1" value="@php if (!empty($reservation)){echo $reservation->nombrePlace;} @endphp">

                               
                                
                            </div>

                            <div class="relative">
                                <label for="">Trajet</label>
                                <select name="trajet_id" class="block w-full px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline">
                                    <option disabled>Votre trajet</option>
                                    @forelse ($trajets as $trajet)
                                        <option value="{{ $trajet->id }}" @if ($trajet->id == $reservation->trajet_id) selected @endif>{{ $trajet->lieuDepart."_".$trajet->lieuArrive }}</option>
                                    @empty
                                        <option value="" disabled>Aucun trajet disponible</option>
                                    @endforelse
                                </select>
                                
                                
                            </div>

                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <input type="submit" value="Enregistrer" class="p-2 text-white bg-green-800 rounded-md">
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


