@extends('layouts.main')
@section('konten')
{{-- KONTEN --}}
<div class="w-full h-full">
    <div class="flex items-center gap-x-24">
        {{-- Tambah Anggota --}}
        <button class="text-lg text-white text-center ml-10 px-5 py-1 rounded-full bg-primary1 hover:bg-blue-800 duration-300">Tambah Anggota</button>
        
        {{-- Search Bar --}}
        <form class="w-5/12 z-10">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-primary1" placeholder="Pencarian Anggota" required>
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
                            NISN
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Anggota
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jurusan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor Telpon
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Aksi
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
                            2914
                        </td>
                        <td class="px-6 py-4">
                            Fatah Zulkirom Fadhilan
                        </td>
                        <td class="px-6 py-4">
                            Teknik Komputer dan Jaringan
                        </td>
                        <td class="px-6 py-4">
                            085357679796
                        </td>
                        <td class="px-6 py-4">
                            <div class="px-5 py-1 text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Aktif
                            </div>
                        </td>
                        <td class="flex px-6 py-4 text-center justify-center">
                            <a href="#">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                  </svg>      
                            </a>
                            <button data-modal-target="delete-modal" data-modal-toggle="delete-modal" type="button">
                                <svg class="w-5 h-5 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
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
                            2914
                        </td>
                        <td class="px-6 py-4">
                            Fatah Zulkirom Fadhilan
                        </td>
                        <td class="px-6 py-4">
                            Teknik Komputer dan Jaringan
                        </td>
                        <td class="px-6 py-4">
                            085357679796
                        </td>
                        <td class="px-6 py-4">
                            <div class="px-5 py-1 text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Aktif
                            </div>
                        </td>
                        <td class="flex px-6 py-4 text-center justify-center">
                            <a href="#">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                  </svg>      
                            </a>
                            <button data-modal-target="delete-modal" data-modal-toggle="delete-modal" type="button">
                                <svg class="w-5 h-5 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>

                    {{-- Data 3 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            3
                        </th>
                        <td class="p-4">
                            2914
                        </td>
                        <td class="px-6 py-4">
                            Fatah Zulkirom Fadhilan
                        </td>
                        <td class="px-6 py-4">
                            Teknik Komputer dan Jaringan
                        </td>
                        <td class="px-6 py-4">
                            085357679796
                        </td>
                        <td class="px-6 py-4">
                            <div class="px-5 py-1 text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Aktif
                            </div>
                        </td>
                        <td class="flex px-6 py-4 text-center justify-center">
                            <a href="#">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                  </svg>      
                            </a>
                            <button data-modal-target="delete-modal" data-modal-toggle="delete-modal" type="button">
                                <svg class="w-5 h-5 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>

                    {{-- Data 4 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            4
                        </th>
                        <td class="p-4">
                            2914
                        </td>
                        <td class="px-6 py-4">
                            Fatah Zulkirom Fadhilan
                        </td>
                        <td class="px-6 py-4">
                            Teknik Komputer dan Jaringan
                        </td>
                        <td class="px-6 py-4">
                            085357679796
                        </td>
                        <td class="px-6 py-4">
                            <div class="px-5 py-1 text-sm text-red-600 bg-red-300 w-full rounded-full text-center font-medium hover:bg-red-400 duration-300">
                                Tidak Aktif
                            </div>
                        </td>
                        <td class="flex px-6 py-4 text-center justify-center">
                            <a href="#">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                  </svg>      
                            </a>
                            <button data-modal-target="delete-modal" data-modal-toggle="delete-modal" type="button">
                                <svg class="w-5 h-5 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>


{{-- MODAL DELETE ANGGOTA --}}
<div id="delete-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="delete-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin?</h3>
                <a href="#" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                    Hapus Anggota
                </a>
                <button data-modal-hide="delete-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batalkan</button>
            </div>
        </div>
    </div>
</div>


{{-- END KONTEN --}}
@endsection