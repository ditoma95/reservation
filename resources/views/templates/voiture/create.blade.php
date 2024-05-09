<x-app-layout>

    <div class="flex items-center justify-between mt-8 mb-6">
        <h1 class="text-2xl font-bold">Ajouter une voiture</h1>
        <div class="">
            <a href="{{ route('voitures.index') }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                Liste voiture
            </a>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('voitures.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="grid grid-cols-2 gap-6">
                            <div class=" border-2  dimim w-[28.8rem] h-[15rem]">
                                <img src="" alt="" class="imdim object-cover w-[100%] h-[100%]" id="file-preview" accept=".png, .jpg, .jpeg, .gif, .svg">
                            </div>

                            <div class="grid col-span-6 sm:col-span-3 h-">
                                <label for="immatriculation" class="text-black">Immatriculation</label>
                                <input required type="text" name="immatriculation" placeholder="immatriculation">
                            </div>


                            <div class="grid col-span-6 sm:col-span-3">
                                <label for="nombrePlace" class="text-black">Nombre de place</label>
                                <input required type="number" name="nombrePlace" placeholder="nombrePlace" min="0">
                            </div>

                            <div class="grid col-span-6 mt-4 sm:col-span-3">
                                <input type="file" class="w-full text-sm font-medium text-gray-500 bg-gray-100 rounded cursor-pointer file:cursor-pointer file:border-0 file:py-2 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white" name="voiture_image" accept="images/*" onchange="afficheImage(event)"/>
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
        function afficheImage(event){
            let entrer = event.target;
            let reader = new FileReader();
            reader.onload = function(){
                let dataUrl = reader.result;
                let output = document.getElementById('file-preview');
                output.src = dataUrl;
            };
            reader.readAsDataURL(entrer.files[0]);
        }
    </script>
</x-app-layout>

