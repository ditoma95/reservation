<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-4">
        <div class="grid grid-cols-1 gap-10 md:grid-cols-2 xl:grid-cols-4">
            <div class="px-6 py-6 bg-white rounded-lg shadow-xl">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-bold text-indigo-600">Mon compte actuel</span>
                    <span class="px-2 py-1 text-xs text-gray-500 transition duration-200 bg-gray-200 rounded-lg cursor-default hover:bg-gray-500 hover:text-gray-200">Today</span>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <svg class="w-12 h-12 p-1 text-indigo-600 bg-indigo-400 border border-indigo-600 rounded-full 2xl:w-16 2xl:h-16 2xl:p-3 bg-opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-end">
                            <span class="text-2xl font-bold 2xl:text-4xl">50 000F</span>
                            {{-- <div class="flex items-center mb-1 ml-2">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                <span class="font-bold text-sm text-gray-500 ml-0.5">3%</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-6 py-6 bg-white rounded-lg shadow-xl">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-bold text-indigo-600">Solde rétiré</span>
                    <span class="px-2 py-1 text-xs text-gray-500 transition duration-200 bg-gray-200 rounded-lg cursor-default hover:bg-gray-500 hover:text-gray-200">Today</span>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <svg class="w-12 h-12 p-1 text-indigo-600 bg-indigo-400 border border-indigo-600 rounded-full 2xl:w-16 2xl:h-16 2xl:p-3 bg-opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-end">
                            <span class="text-2xl font-bold 2xl:text-4xl"> 10 000F</span>
                            {{-- <div class="flex items-center mb-1 ml-2">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                <span class="font-bold text-sm text-gray-500 ml-0.5">3%</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="px-6 py-6 bg-white rounded-lg shadow-xl">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-bold text-blue-600">Mes passages</span>
                    <span class="px-2 py-1 text-xs text-gray-500 transition duration-200 bg-gray-200 rounded-lg cursor-default hover:bg-gray-500 hover:text-gray-200">7 days</span>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <svg class="w-12 h-12 p-1 text-blue-600 bg-blue-400 border border-blue-600 rounded-full 2xl:w-16 2xl:h-16 2xl:p-3 bg-opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-end">
                            <span class="text-2xl font-bold 2xl:text-4xl">4</span>
                            {{-- <div class="flex items-center mb-1 ml-2">
                                <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                <span class="font-bold text-sm text-gray-500 ml-0.5">7%</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-6 py-6 bg-white rounded-lg shadow-xl">
                <div class="flex items-center justify-between">
                    <span class="text-sm font-bold text-yellow-600">Mes trajets : (Départ - arrivés)</span>
                    <span class="px-2 py-1 text-xs text-gray-500 transition duration-200 bg-gray-200 rounded-lg cursor-default hover:bg-gray-500 hover:text-gray-200">30 days</span>
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div>
                        <svg class="w-12 h-12 p-1 text-yellow-600 bg-yellow-400 border border-yellow-600 rounded-full 2xl:w-16 2xl:h-16 2xl:p-3 bg-opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <div class="flex flex-col">
                        <div class="flex items-end">
                            <span class="text-2xl font-bold 2xl:text-4xl">6</span>
                            {{-- <div class="flex items-center mb-1 ml-2">
                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6"></path></svg>
                                <span class="font-bold text-sm text-gray-500 ml-0.5">-1%</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div>
            <div class="px-8 py-6 overflow-x-scroll bg-white rounded-lg custom-scrollbar">
                <h4 class="text-xl font-semibold">Recent transactions</h4>
                <table class="w-full my-8 whitespace-nowrap">
                    <thead class="font-bold text-gray-100 bg-secondary">
                        <td>
                        </td>
                        <td class="py-2 pl-2">
                            Order ID
                        </td>
                        <td class="py-2 pl-2">
                            Customer Name
                        </td>
                        <td class="py-2 pl-2">
                            Price
                        </td>
                        <td class="py-2 pl-2">
                            Status
                        </td>
                        <td class="py-2 pl-2">
                            Date
                        </td>
                        <td class="py-2 pl-2">
                            View Details
                        </td>
                    </thead>
                    <tbody class="text-sm">
                        <tr class="transition duration-200 bg-gray-100 hover:bg-primary hover:bg-opacity-20">
                            <td class="py-3 pl-2">
                                <input type="checkbox" class="ml-2 rounded focus:ring-0 checked:bg-red-500">
                            </td>
                            <td class="py-3 pl-2">
                                #OR7546
                            </td>
                            <td class="py-3 pl-2 capitalize">
                                Harold Hobbs
                            </td>
                            <td class="py-3 pl-2">
                                $ 123.00
                            </td>
                            <td class="py-3 pl-2">
                                <span class="bg-green-500 px-1.5 py-0.5 rounded-lg text-gray-100">Paid</span>
                            </td>
                            <td class="py-3 pl-2">
                                Sep 30, 2021
                            </td>
                            <td class="py-3 pl-2">
                                <a href="#" class="px-2 py-1 mr-2 text-gray-100 rounded-lg bg-primary hover:bg-opacity-90">View Details</a>
                            </td>
                        </tr>
                        <tr class="transition duration-200 bg-gray-200 hover:bg-primary hover:bg-opacity-20">
                            <td class="py-3 pl-2">
                                <input type="checkbox" class="ml-2 rounded focus:ring-0 checked:bg-red-500">
                            </td>
                            <td class="py-3 pl-2">
                                #OR4359
                            </td>
                            <td class="py-3 pl-2 capitalize">
                                Shirley Williams
                            </td>
                            <td class="py-3 pl-2">
                                $ 745.00
                            </td>
                            <td class="py-3 pl-2">
                                <span class="bg-indigo-500 px-1.5 py-0.5 rounded-lg text-gray-100">Shipped</span>
                            </td>
                            <td class="py-3 pl-2">
                                Sep 28, 2021
                            </td>
                            <td class="py-3 pl-2">
                                <a href="#" class="px-2 py-1 mr-2 text-gray-100 rounded-lg bg-primary hover:bg-opacity-90">View Details</a>
                            </td>
                        </tr>
                        <tr class="transition duration-200 bg-gray-100 hover:bg-primary hover:bg-opacity-20">
                            <td class="py-3 pl-2">
                                <input type="checkbox" class="ml-2 rounded focus:ring-0 checked:bg-red-500">
                            </td>
                            <td class="py-3 pl-2">
                                #OR3654
                            </td>
                            <td class="py-3 pl-2 capitalize">
                                Timothy Reyes
                            </td>
                            <td class="py-3 pl-2">
                                $ 1344.00
                            </td>
                            <td class="py-3 pl-2">
                                <span class="bg-yellow-500 px-1.5 py-0.5 rounded-lg text-gray-100">Pending</span>
                            </td>
                            <td class="py-3 pl-2">
                                Sep 27, 2021
                            </td>
                            <td class="py-3 pl-2">
                                <a href="#" class="px-2 py-1 mr-2 text-gray-100 rounded-lg bg-primary hover:bg-opacity-90">View Details</a>
                            </td>
                        </tr>
                        <tr class="transition duration-200 bg-gray-200 hover:bg-primary hover:bg-opacity-20">
                            <td class="py-3 pl-2">
                                <input type="checkbox" class="ml-2 rounded focus:ring-0 checked:bg-red-500">
                            </td>
                            <td class="py-3 pl-2">
                                #OR7451
                            </td>
                            <td class="py-3 pl-2 capitalize">
                                Jane Stillman
                            </td>
                            <td class="py-3 pl-2">
                                $ 230.00
                            </td>
                            <td class="py-3 pl-2">
                                <span class="bg-red-500 px-1.5 py-0.5 rounded-lg text-gray-100">Canceled</span>
                            </td>
                            <td class="py-3 pl-2">
                                Sep 24, 2021
                            </td>
                            <td class="py-3 pl-2">
                                <a href="#" class="px-2 py-1 mr-2 text-gray-100 rounded-lg bg-primary hover:bg-opacity-90">View Details</a>
                            </td>
                        </tr>
                        <tr class="transition duration-200 bg-gray-100 hover:bg-primary hover:bg-opacity-20">
                            <td class="py-3 pl-2">
                                <input type="checkbox" class="ml-2 rounded focus:ring-0 checked:bg-red-500">
                            </td>
                            <td class="py-3 pl-2">
                                #OR1324
                            </td>
                            <td class="py-3 pl-2 capitalize">
                                Leon Blank
                            </td>
                            <td class="py-3 pl-2">
                                $ 511.00
                            </td>
                            <td class="py-3 pl-2">
                                <span class="bg-indigo-500 px-1.5 py-0.5 rounded-lg text-gray-100">Shipped</span>
                            </td>
                            <td class="py-3 pl-2">
                                Sep 20, 2021
                            </td>
                            <td class="py-3 pl-2">
                                <a href="#" class="px-2 py-1 mr-2 text-gray-100 rounded-lg bg-primary hover:bg-opacity-90">View Details</a>
                            </td>
                        </tr>
                        <tr class="transition duration-200 bg-gray-200 hover:bg-primary hover:bg-opacity-20">
                            <td class="py-3 pl-2">
                                <input type="checkbox" class="ml-2 rounded focus:ring-0 checked:bg-red-500">
                            </td>
                            <td class="py-3 pl-2">
                                #OR5331
                            </td>
                            <td class="py-3 pl-2 capitalize">
                                Cecilia Hendric
                            </td>
                            <td class="py-3 pl-2">
                                $ 2654.00
                            </td>
                            <td class="py-3 pl-2">
                                <span class="bg-green-500 px-1.5 py-0.5 rounded-lg text-gray-100">Paid</span>
                            </td>
                            <td class="py-3 pl-2">
                                Sep 09, 2021
                            </td>
                            <td class="py-3 pl-2">
                                <a href="#" class="px-2 py-1 mr-2 text-gray-100 rounded-lg bg-primary hover:bg-opacity-90">View Details</a>
                            </td>
                        </tr>
                        <tr class="transition duration-200 bg-gray-100 hover:bg-primary hover:bg-opacity-20">
                            <td class="py-3 pl-2">
                                <input type="checkbox" class="ml-2 rounded focus:ring-0 checked:bg-red-500">
                            </td>
                            <td class="py-3 pl-2">
                                #OR1874
                            </td>
                            <td class="py-3 pl-2 capitalize">
                                Suzanne Williams
                            </td>
                            <td class="py-3 pl-2">
                                $ 400.00
                            </td>
                            <td class="py-3 pl-2">
                                <span class="bg-green-500 px-1.5 py-0.5 rounded-lg text-gray-100">Paid</span>
                            </td>
                            <td class="py-3 pl-2">
                                Aug 31, 2021
                            </td>
                            <td class="py-3 pl-2">
                                <a href="#" class="px-2 py-1 mr-2 text-gray-100 rounded-lg bg-primary hover:bg-opacity-90">View Details</a>
                            </td>
                        </tr>
                        <tr class="transition duration-200 bg-gray-200 hover:bg-primary hover:bg-opacity-20">
                            <td class="py-3 pl-2">
                                <input type="checkbox" class="ml-2 rounded focus:ring-0 checked:bg-red-500">
                            </td>
                            <td class="py-3 pl-2">
                                #OR4963
                            </td>
                            <td class="py-3 pl-2 capitalize">
                                Gerland Falvin
                            </td>
                            <td class="py-3 pl-2">
                                $ 954.00
                            </td>
                            <td class="py-3 pl-2">
                                <span class="bg-yellow-500 px-1.5 py-0.5 rounded-lg text-gray-100">Pending</span>
                            </td>
                            <td class="py-3 pl-2">
                                Aug 31, 2021
                            </td>
                            <td class="py-3 pl-2">
                                <a href="#" class="px-2 py-1 mr-2 text-gray-100 rounded-lg bg-primary hover:bg-opacity-90">View Details</a>
                            </td>
                        </tr>
                        <tr class="transition duration-200 bg-gray-100 hover:bg-primary hover:bg-opacity-20">
                            <td class="py-3 pl-2">
                                <input type="checkbox" class="ml-2 rounded focus:ring-0 checked:bg-red-500">
                            </td>
                            <td class="py-3 pl-2">
                                #OR9452
                            </td>
                            <td class="py-3 pl-2 capitalize">
                                Crystal Reagle
                            </td>
                            <td class="py-3 pl-2">
                                $ 1365.00
                            </td>
                            <td class="py-3 pl-2">
                                <span class="bg-red-500 px-1.5 py-0.5 rounded-lg text-gray-100">Canceled</span>
                            </td>
                            <td class="py-3 pl-2">
                                Aug 25, 2021
                            </td>
                            <td class="py-3 pl-2">
                                <a href="#" class="px-2 py-1 mr-2 text-gray-100 rounded-lg bg-primary hover:bg-opacity-90">View Details</a>
                            </td>
                        </tr>
                        <tr class="transition duration-200 bg-gray-200 hover:bg-primary hover:bg-opacity-20">
                            <td class="py-3 pl-2">
                                <input type="checkbox" class="ml-2 rounded focus:ring-0 checked:bg-red-500">
                            </td>
                            <td class="py-3 pl-2">
                                #OR8563
                            </td>
                            <td class="py-3 pl-2 capitalize">
                                John Reeves
                            </td>
                            <td class="py-3 pl-2">
                                $ 164.00
                            </td>
                            <td class="py-3 pl-2">
                                <span class="bg-indigo-500 px-1.5 py-0.5 rounded-lg text-gray-100">Shipped</span>
                            </td>
                            <td class="py-3 pl-2">
                                July 20, 2021
                            </td>
                            <td class="py-3 pl-2">
                                <a href="#" class="px-2 py-1 mr-2 text-gray-100 rounded-lg bg-primary hover:bg-opacity-90">View Details</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> --}}
    </div>
</x-app-layout>
