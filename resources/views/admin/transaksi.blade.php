@extends('layouts.main')
@section('konten')
{{-- KONTEN --}}
<div class="w-full h-full">
    <div class="flex items-center gap-x-24">        
        {{-- Search Bar --}}
        <form class="w-5/12 z-10">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-primary1" placeholder="Pencarian Transaksi" required>
            </div>
        </form>
    </div>

    {{-- TABEL --}}
    <div class="mt-5">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ID Anggota
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Anggota
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Jurusan
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Judul Buku
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Total Pinjam
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
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
                            P123
                        </td>
                        <td class="px-6 py-4">
                            Ruslan Ismail
                        </td>
                        <td class="px-6 py-4 text-center">
                            TKJ
                        </td>
                        <td class="px-6 py-4">
                            Pendidikan Agama Islam dan Budi Pekerti
                        </td>
                        <td class="px-6 py-4 text-center">
                            10/26/2022
                        </td>
                        <td class="px-6 py-4 text-center">
                            2
                        </td>
                        <td class="px-6 py-4 text-center flex gap-x-2">
                            <button class="px-5 py-1 text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Terima
                            </button>

                            <button class="px-5 py-1 text-sm text-red-600 bg-red-300 w-full rounded-full text-center font-medium hover:bg-red-400 duration-300">
                                Tolak
                            </button>
                        </td>
                    </tr>

                    {{-- Data 2 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            2
                        </th>
                        <td class="p-4">
                            P123
                        </td>
                        <td class="px-6 py-4">
                            Ruslan Ismail
                        </td>
                        <td class="px-6 py-4 text-center">
                            TKJ
                        </td>
                        <td class="px-6 py-4">
                            Pendidikan Agama Islam dan Budi Pekerti
                        </td>
                        <td class="px-6 py-4 text-center">
                            10/26/2022
                        </td>
                        <td class="px-6 py-4 text-center">
                            2
                        </td>
                        <td class="px-6 py-4 text-center flex gap-x-2">
                            <button class="px-5 py-1 text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Terima
                            </button>

                            <button class="px-5 py-1 text-sm text-red-600 bg-red-300 w-full rounded-full text-center font-medium hover:bg-red-400 duration-300">
                                Tolak
                            </button>
                        </td>
                    </tr>

                    {{-- Data 3 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            3
                        </th>
                        <td class="p-4">
                            P123
                        </td>
                        <td class="px-6 py-4">
                            Ruslan Ismail
                        </td>
                        <td class="px-6 py-4 text-center">
                            TKJ
                        </td>
                        <td class="px-6 py-4">
                            Pendidikan Agama Islam dan Budi Pekerti
                        </td>
                        <td class="px-6 py-4 text-center">
                            10/26/2022
                        </td>
                        <td class="px-6 py-4 text-center">
                            2
                        </td>
                        <td class="px-6 py-4 text-center flex gap-x-2">
                            <button class="px-5 py-1 text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Terima
                            </button>

                            <button class="px-5 py-1 text-sm text-red-600 bg-red-300 w-full rounded-full text-center font-medium hover:bg-red-400 duration-300">
                                Tolak
                            </button>
                        </td>
                    </tr>

                    {{-- Data 4 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            4
                        </th>
                        <td class="p-4">
                            P123
                        </td>
                        <td class="px-6 py-4">
                            Ruslan Ismail
                        </td>
                        <td class="px-6 py-4 text-center">
                            TKJ
                        </td>
                        <td class="px-6 py-4">
                            Pendidikan Agama Islam dan Budi Pekerti
                        </td>
                        <td class="px-6 py-4 text-center">
                            10/26/2022
                        </td>
                        <td class="px-6 py-4 text-center">
                            2
                        </td>
                        <td class="px-6 py-4 text-center flex gap-x-2">
                            <button class="px-5 py-1 text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Terima
                            </button>

                            <button class="px-5 py-1 text-sm text-red-600 bg-red-300 w-full rounded-full text-center font-medium hover:bg-red-400 duration-300">
                                Tolak
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