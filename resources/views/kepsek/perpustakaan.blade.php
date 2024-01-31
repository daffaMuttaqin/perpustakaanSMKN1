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
                    </tr>
                </thead>
                <tbody>
                    {{-- Data 1 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            1
                        </th>
                        <td class="p-4">
                            <img src="img/buku1.png" class="w-16 md:w-32 max-w-full max-h-full" alt="">
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
                            <div class="px-5 py-1 text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Tersedia
                            </div>
                        </td>
                    </tr>

                    {{-- Data 2 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            2
                        </th>
                        <td class="p-4">
                            <img src="img/buku1.png" class="w-16 md:w-32 max-w-full max-h-full" alt="">
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
                            <div class="px-5 py-1 text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Tersedia
                            </div>
                        </td>
                    </tr>

                    {{-- Data 3 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 font-medium px-6 py-4 text-gray-900 whitespace-nowrap">
                            3
                        </th>
                        <td class="p-4">
                            <img src="img/buku1.png" class="w-16 md:w-32 max-w-full max-h-full" alt="">
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
                            <div class="px-5 py-1 text-red-600 bg-red-300 w-full rounded-full text-center font-medium hover:bg-red-400">
                                Tidak Tersedia
                            </div>
                        </td>
                    </tr>

                    {{-- Data 4 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 font-medium px-6 py-4 text-gray-900 whitespace-nowrap">
                            4
                        </th>
                        <td class="p-4">
                            <img src="img/buku1.png" class="w-16 md:w-32 max-w-full max-h-full" alt="">
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
                            <div class="px-5 py-1 text-sm text-red-600 bg-red-300 w-full rounded-full text-center font-medium hover:bg-red-400 duration-300">
                                Tidak Tersedia
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- MODAL BUKU BARU --}}
<!-- Main modal -->
<div id="tambahBuku" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Data Buku
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="tambahBuku">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="max-w-3xl mx-auto my-5 pb-5">
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Sampul</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                </div>

                <div class="mb-5">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Buku</label>
                  <input type="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="Masukkan Judul Buku" required>
                </div>

                <div class="mb-5">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis</label>
                  <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="Masukkan nama penulis" required>
                </div>

                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penerbitan</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="Masukkan nama Penerbit" required>
                </div>

                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ISBN</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="Masukkan ISBN" required>
                </div>

                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ketersediaan</label>
                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="Masukkan jumlah buku" required>
                </div>

                <button type="submit" class="text-white bg-primary1 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
              </form>
        </div>
    </div>
</div> 

{{-- END KONTEN --}}
@endsection