@extends('layouts.main')
@section('konten')
{{-- KONTEN --}}
<div class="w-full h-full">
    <div class="flex items-center gap-x-24">
        <button class="text-lg text-white text-center ml-10 px-5 py-1 rounded-full bg-primary1 hover:bg-blue-800 duration-300">Buku Baru</button>
    
        <form class="w-5/12 z-10">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-primary1" placeholder="Pencarian buku" required>
            </div>
        </form>
    </div>

    {{-- TABEL --}}
    <div class="mt-5">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 text-center uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sampul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul Buku
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Creator
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Penerbitan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ISBN
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ketersediaan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Data 1 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            1
                        </th>
                        <td class="p-4">
                            <img src="img/buku1.png" class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                        </td>
                        <td class="px-6 py-4">
                            Pendidikan Agama Islam dan Budi Pekerti
                        </td>
                        <td class="px-6 py-4">
                            H. Abd. Rahman,<br>Hj. Lim Halimah,<br>Munawir A.M.,<br>H.A. Sholeh Dimyathi,<br>H. Ridhwan.
                        </td>
                        <td class="px-6 py-4">
                            Erlangga
                        </td>
                        <td class="px-6 py-4">
                            297.73 PEN CB-D.09 2016-14494
                        </td>
                        <td class="px-6 py-4 text-center">
                            30
                        </td>
                        <td class="px-6 py-4">
                            <button class="px-5 py-1 text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Tersedia
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                  </svg>      
                            </button>
                        </td>
                    </tr>

                    {{-- Data 2 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            2
                        </th>
                        <td class="p-4">
                            <img src="img/buku1.png" class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                        </td>
                        <td class="px-6 py-4">
                            Pendidikan Agama Islam dan Budi Pekerti
                        </td>
                        <td class="px-6 py-4">
                            H. Abd. Rahman,<br>Hj. Lim Halimah,<br>Munawir A.M.,<br>H.A. Sholeh Dimyathi,<br>H. Ridhwan.
                        </td>
                        <td class="px-6 py-4">
                            Erlangga
                        </td>
                        <td class="px-6 py-4">
                            297.73 PEN CB-D.09 2016-14494
                        </td>
                        <td class="px-6 py-4 text-center">
                            30
                        </td>
                        <td class="px-6 py-4">
                            <button class="px-5 py-1 text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Tersedia
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                  </svg>
                            </button>
                        </td>
                    </tr>

                    {{-- Data 3 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 font-medium px-6 py-4 text-gray-900 whitespace-nowrap">
                            3
                        </th>
                        <td class="p-4">
                            <img src="img/buku1.png" class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                        </td>
                        <td class="px-6 py-4">
                            Pendidikan Agama Islam dan Budi Pekerti
                        </td>
                        <td class="px-6 py-4">
                            H. Abd. Rahman,<br>Hj. Lim Halimah,<br>Munawir A.M.,<br>H.A. Sholeh Dimyathi,<br>H. Ridhwan.
                        </td>
                        <td class="px-6 py-4">
                            Erlangga
                        </td>
                        <td class="px-6 py-4">
                            297.73 PEN CB-D.09 2016-14494
                        </td>
                        <td class="px-6 py-4 text-center">
                            30
                        </td>
                        <td class="px-6 py-4">
                            <button class="px-5 py-1 text-red-600 bg-red-300 w-full rounded-full text-center font-medium hover:bg-red-400">
                                Tidak Tersedia
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                  </svg>
                            </button>
                        </td>
                    </tr>

                    {{-- Data 4 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 font-medium px-6 py-4 text-gray-900 whitespace-nowrap">
                            4
                        </th>
                        <td class="p-4">
                            <img src="img/buku1.png" class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                        </td>
                        <td class="px-6 py-4">
                            Pendidikan Agama Islam dan Budi Pekerti
                        </td>
                        <td class="px-6 py-4">
                            H. Abd. Rahman,<br>Hj. Lim Halimah,<br>Munawir A.M.,<br>H.A. Sholeh Dimyathi,<br>H. Ridhwan.
                        </td>
                        <td class="px-6 py-4">
                            Erlangga
                        </td>
                        <td class="px-6 py-4">
                            297.73 PEN CB-D.09 2016-14494
                        </td>
                        <td class="px-6 py-4 text-center">
                            30
                        </td>
                        <td class="px-6 py-4">
                            <button class="px-5 py-1 text-sm text-red-600 bg-red-300 w-full rounded-full text-center font-medium hover:bg-red-400 duration-300">
                                Tidak Tersedia
                            </button>
                        </td>
                        <td class="px-6 py-4">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                  </svg>
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- END KONTEN --}}
@endsection