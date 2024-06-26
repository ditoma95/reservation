<x-app-layout>
    <div class="flex items-center justify-between mt-8 mb-6">
        <h1 class="text-2xl font-bold">Modifier une impression</h1>
         <div class="">
            <a href="{{ route('impressions.index') }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                Liste des impressions
            </a>
        </div> 
    </div>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200"> 
                    <form  action="{{ route('impressions.update' ,$impression->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-6 gap-6">
                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="avisService" class="text-black">Avis du service</label>
                                <input required type="text" name="avisService" placeholder="Avis du service"  value="@php if (!empty($impression)){echo $impression->avisService;} @endphp">
                            </div>

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="commentaire" class="text-black">Commentaire</label>
                                <input required type="text" name="commentaire" placeholder="commentaire" value="@php if (!empty($impression)){echo $impression->commentaire;} @endphp">
                            </div>

                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="dateAvis" class="text-black">Date d'avis</label>
                                <input required type="date" name="dateAvis" value="@php if (!empty($impression)){echo $impression->dateAvis;} @endphp"  >
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
</x-app-layout>
