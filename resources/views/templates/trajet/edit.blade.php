<x-app-layout>

    <div class="flex items-center justify-between mb-6 mt-8">
        <h1 class="text-2xl font-bold">Ajouter un trajet</h1>
        <div class="">
            <a href="{{ route('trajets.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Créer un trajet
            </a>
        </div>
    </div>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('trajets.update', $trajet->id) }}" method="post">

                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3 grid">
                                <label for="lieuDep" class="text-black">Lieu Départ</label>
                                <input required type="text" name="lieuDepart" value="{{ $trajet->lieuDepart }}" placeholder="Lieu Départ">
                            </div>

                            <div class="col-span-6 sm:col-span-3 grid">
                                <label for="lieuArr" class="text-black">Lieu Arrivé</label>
                                <input required type="text" name="lieuArrive" value="{{ $trajet->lieuArrive }}" placeholder="Lieu Arrivé">
                            </div>

                            <div class="col-span-6 sm:col-span-3 grid">
                                <label for="lieuEscale" class="text-black">Lieu Escale</label>
                                <input required type="text" name="lieuEscale" value="{{ $trajet->lieuEscale }}" placeholder="Lieu Escale">
                            </div>

                            <div class="col-span-6 sm:col-span-3 grid">
                                <label for="tarif" class="text-black">Tarif</label>
                                <input required type="number" name="tarif" value="{{ $trajet->tarif }}" placeholder="Tarif" min="0">
                            </div>

                            <div class="col-span-6 sm:col-span-3 grid">
                                <label for="nombrePlaceDisponible" class="text-black">Nombre de place disponible</label>
                                <input required type="number" name="nombrePlaceDisponible" value="{{ $trajet->nombrePlaceDisponible }}" placeholder="place disponible" min="0">
                            </div>

                            <div class="col-span-6 sm:col-span-3 grid">
                                <label for="heureDep" class="text-black">Heure Départ</label>
                                <input required type="time" name="heurDepart" value="{{ $trajet->heurDepart }}" placeholder="Heure Départ">
                            </div>

                            <div class="col-span-6 sm:col-span-3 grid">
                                <label for="dateDep" class="text-black">Date Départ</label>
                                <input required type="date" name="dateDepart" value="{{ $trajet->dateDepart }}">
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <input type="submit" value="update" class="bg-green-800 p-2 rounded-md text-white">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

