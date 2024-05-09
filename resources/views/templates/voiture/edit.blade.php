<x-app-layout>

    <div class="flex items-center justify-between mb-6 mt-8">
        <h1 class="text-2xl font-bold">Ajouter une voiture</h1>
        <div class="">
            <a href="{{ route('voitures.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Liste voiture
            </a>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('voitures.update', $voiture->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-2 gap-6">
                            <div class=" border-2  dimim w-[28.8rem] h-[15rem]">
                                <img src="" alt="" class="imdim object-cover w-[100%] h-[100%]" id="file-preview" accept=".png, .jpg, .jpeg, .gif, .svg">
                            </div>

                            <div class="col-span-6 sm:col-span-3 grid h-">
                                <label for="immatriculation" class="text-black">Immatriculation</label>
                                <input required type="text" name="immatriculation" placeholder="immatriculation" value="{{ $voiture->immatriculation }}">
                            </div>


                            <div class="col-span-6 sm:col-span-3 grid">
                                <label for="nombrePlace" class="text-black">Nombre de place</label>
                                <input required type="number" name="nombrePlace" placeholder="nombrePlace" min="0" value="{{ $voiture->nombrePlace }}">
                            </div>

                            <div class="col-span-6 sm:col-span-3 grid mt-4">
                                <label for="" class="mb-1">Photo de la voiture</label>
                                <label for="uploadFile1" class="flex bg-gray-800 hover:bg-gray-700 text-white text-base px-10 py-2 outline-none rounded w-max cursor-pointer mx-auto font-[sans-serif]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline w-6 mr-2 fill-white" viewBox="0 0 32 32">
                                        <path  d="M23.75 11.044a7.99 7.99 0 0 0-15.5-.009A8 8 0 0 0 9 27h3a1 1 0 0 0 0-2H9a6 6 0 0 1-.035-12 1.038 1.038 0 0 0 1.1-.854 5.991 5.991 0 0 1 11.862 0A1.08 1.08 0 0 0 23 13a6 6 0 0 1 0 12h-3a1 1 0 0 0 0 2h3a8 8 0 0 0 .75-15.956z"  data-original="#000000" />
                                        <path d="M20.293 19.707a1 1 0 0 0 1.414-1.414l-5-5a1 1 0 0 0-1.414 0l-5 5a1 1 0 0 0 1.414 1.414L15 16.414V29a1 1 0 0 0 2 0V16.414z" data-original="#000000" />
                                    </svg>
                                    Photo de la voiture (.jpg, .png, .jpeg)
                                    <input type="file" id='uploadFile1' class="hidden"  name="voiture_image" accept="images/*" onchange="afficheImage(event)" />
                                </label>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <input type="submit" value="Enregistrer" class="bg-green-800 p-2 rounded-md text-white">
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


