@extends('layouts.main')
@section('konten')
{{-- KONTEN --}}
<div class="w-full h-full">
    <div class="flex items-center gap-x-24">   
    </div>

    <div class="flex items-center justify-center w-full">
        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                </svg>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
            </div>
            <input id="dropzone-file" type="file" class="hidden" />
        </label>
    </div> 

    {{-- TABEL --}}
    <div class="mt-5 px-16">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama File
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Ukuran File
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Tanggal Unggah
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
                            Bukti Setoran Denda 2020/2021.jpg
                        </td>
                        <td class="px-6 py-4 text-center">
                            2mb
                        </td>
                        <td class="px-6 py-4 text-center">
                            10/26/2022
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button class="px-5 py-1 text-sm text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Done
                            </button>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button class="">
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
                            Bukti Setoran Denda 2020/2021.jpg
                        </td>
                        <td class="px-6 py-4 text-center">
                            2mb
                        </td>
                        <td class="px-6 py-4 text-center">
                            10/26/2022
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button class="px-5 py-1 text-sm text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Done
                            </button>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button class="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
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
                            Bukti Setoran Denda 2020/2021.jpg
                        </td>
                        <td class="px-6 py-4 text-center">
                            2mb
                        </td>
                        <td class="px-6 py-4 text-center">
                            10/26/2022
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button class="px-5 py-1 text-sm text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Done
                            </button>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button class="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
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
                            Bukti Setoran Denda 2020/2021.jpg
                        </td>
                        <td class="px-6 py-4 text-center">
                            2mb
                        </td>
                        <td class="px-6 py-4 text-center">
                            10/26/2022
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button class="px-5 py-1 text-sm text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Done
                            </button>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button class="">
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