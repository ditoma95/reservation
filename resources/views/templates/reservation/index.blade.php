<x-app-layout>
    @include('role-permission.nav-links')

    <div>
        <!-- component -->
        <section class="container px-4 mx-auto">
    
          <div class="sm:flex sm:items-center sm:justify-between"> 
              <div></div>
    
              <div class="flex items-center mt-4 gap-x-3">
                    <a href="{{ url('reservations/create') }}">
                        <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Effectué une resevation</span>
                        </button>
                    </a>
              </div>
            </div>
    
          
          <div class="mt-6 md:flex md:items-center md:justify-between">
              
    
              <div class="relative flex items-center mt-4 md:mt-0">
                  <span class="absolute">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                      </svg>
                  </span>
                <form action="">
                    <input type="search" name="item-name" placeholder="Search" class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </form>
              </div>
          </div>
    
          <div class="flex flex-col mt-6">
              <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                      <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                              <thead class="bg-gray-50 dark:bg-gray-800">
                                  <tr>
                                      <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                          <button class="flex items-center gap-x-3 focus:outline-none">
                                              <span>ID</span>
    
                                              <svg class="h-3" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                  <path d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z" fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                  <path d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z" fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                              </svg>
                                          </button>
                                      </th>
    
                                      <th scope="col" class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                          Date de départ
                                      </th>
    
                                      <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                          Lieu de départ
                                      </th>
    
                                      <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Lieu d'arrivé
                                    </th>
    
    
                                      <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Heur d'arrivé                                
                                      </th>
    
                                      <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Nombre de place                                
                                     </th>
                                     <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Trajet                                
                                     </th>
                                     <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Passager                                
                                     </th>
                                      <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Editer                               
                                     </th>
                                     <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Supprimer                              
                                     </th>
                                     <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Afficher                             
                                     </th>
                                  </tr>
                              </thead>
    
                              <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
    
    
                                    @forelse ($reservations as $reservation)
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                <div>
                                                    <h2 class="font-medium text-gray-800 dark:text-white ">{{ $reservation->id }}</h2>
                                                </div>
                                            </td>
                                            <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                                <div class="inline px-3 py-1 text-sm font-normal text-white gap-x-2 ">
                                                    {{ $reservation->dateDepart }}
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <h4 class="text-gray-700 dark:text-gray-200">{{ $reservation->lieuDepart }}</h4>
                                                </div>
                                            </td>
            
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <h4 class="text-gray-700 dark:text-gray-200">{{ $reservation->lieuArrive }}</h4>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <h4 class="text-gray-700 dark:text-gray-200">{{ $reservation->heurDepart }}</h4>
                                                </div>
                                            </td>

                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <h4 class="text-gray-700 dark:text-gray-200">{{ $reservation->nombrePlace }}</h4>
                                                </div>
                                            </td>

                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <h4 class="text-gray-700 dark:text-gray-200">{{ $reservation->trajets->lieuDepart."_".$reservation->trajets->lieuArrive}}</h4>
                                                </div>
                                                {{-- $reservation->trajets->lieuDepart."_".$reservation->trajets->lieuArrive --}}
                                            </td>
                                                <div>
                                            
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div>
                                                    <h4 class="text-gray-700 dark:text-gray-200">{{ $reservation->passager->user->name." ".$reservation->passager->user->surname}}</h4>
                                                </div>
                                            </td>

            
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <a href="{{ url('reservations/' . $reservation->id . '/edit') }}" class="text-indigo-600 hover:text-indigo-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-700 cursor-pointer">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                    </svg>                                          
                                                </a>
                                            </td>
            
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <form action="{{ url('reservations/' . $reservation->id) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-700 cursor-pointer">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>  
                                                    </button>
                                                </form>
                                            </td>

                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <a href=" {{ route('reservations.show', $reservation->id) }} " class="text-indigo-600 hover:text-indigo-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-850 cursor-pointer">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="10" class="px-6 py-4  font-medium text-center text-gray-50 whitespace-nowrap">Aucune reservation disponible</td>
                                        </tr>
                                    @endforelse
                                        
                                </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
        </section>
      </div>
</x-app-layout>




    