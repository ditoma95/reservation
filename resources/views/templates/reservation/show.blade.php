<x-app-layout>

    <div class="flex items-center justify-between mt-8 mb-6">
         <h1 class="text-2xl font-bold">Afficher une reservation</h1>
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
                    <form  method="get">
                        @csrf
                        <div class="grid grid-cols-6 gap-6">

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="dateDepart" class="text-black">Date Départ</label>
                                <input required type="date" name="dateDepart" value="@php if (!empty($reservation)){echo $reservation->dateDepart;} @endphp" @disabled(true)>
                            </div>


                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="lieuDepart" class="text-black">Lieu Départ</label>
                                <input required type="text" name="lieuDepart" placeholder="Lieu Départ" value="@php if (!empty($reservation)){echo $reservation->lieuDepart;} @endphp" @disabled(true)>
                            </div>

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="lieuArrive" class="text-black">Lieu Arrivé</label>
                                <input required type="text" name="lieuArrive" placeholder="Lieu Arrivé" value="@php if (!empty($reservation)){echo $reservation->lieuArrive;} @endphp" @disabled(true)>
                            </div>

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="heurDepart" class="text-black">Heure Départ</label>
                                <input required type="time" name="heurDepart" placeholder="Heure Départ" value="@php if (!empty($reservation)){echo $reservation->heurDepart;} @endphp" @disabled(true)>
                            </div>

                            

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="nombrePlace" class="text-black">Nombre de place</label>
                                <input required type="number" name="nombrePlace" placeholder="Nbre de place"  min="1" value="@php if (!empty($reservation)){echo $reservation->nombrePlace;} @endphp" @disabled(true)>

                               
                                
                            </div>

                            <div class="relative">
                                <label for="">Trajet</label>
                                <select name="trajet_id" class="block w-full px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline" @disabled(true)>
                                    <option disabled>Votre trajet</option>
                                    @forelse ($trajets as $trajet)
                                        <option value="{{ $trajet->id }}" @if ($trajet->id == $reservation->trajet_id) selected @endif>{{ $trajet->lieuDepart."_".$trajet->lieuArrive }}</option>
                                    @empty
                                        <option value="" disabled>Aucun trajet disponible</option>
                                    @endforelse
                                </select>
                                
                                
                            </div>

                        </div>

                        {{-- <div class="flex items-center justify-end mt-4">
                            <input type="submit" value="Enregistrer" class="p-2 text-white bg-green-800 rounded-md" hidden>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
   
</x-app-layout>



