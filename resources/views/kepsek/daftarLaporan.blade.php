@extends('layouts.main')
@section('konten')
{{-- KONTEN --}}
<div class="w-full h-full">

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
                            Nama File
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Ukuran File
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Tanggal Unggah
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
                            Laporan Denda Tahun 2023.pdf
                        </td>
                        <td class="px-6 py-4 text-center">
                            910kb
                        </td>
                        <td class="px-6 py-4 text-center">
                            10/26/2022
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button class="px-5 py-1 text-blue-600 bg-blue-300 w-full rounded-full text-center font-medium hover:bg-blue-400 duration-300">
                                Lihat
                            </button>
                        </td>
                    </tr>

                    {{-- Data 2 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            2
                        </th>
                        <td class="p-4">
                            Laporan Denda Tahun 2023.pdf
                        </td>
                        <td class="px-6 py-4 text-center">
                            910kb
                        </td>
                        <td class="px-6 py-4 text-center">
                            10/26/2022
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button class="px-5 py-1 text-blue-600 bg-blue-300 w-full rounded-full text-center font-medium hover:bg-blue-400 duration-300">
                                Lihat
                            </button>
                        </td>
                    </tr>

                    {{-- Data 3 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            3
                        </th>
                        <td class="p-4">
                            Laporan Denda Tahun 2023.pdf
                        </td>
                        <td class="px-6 py-4 text-center">
                            910kb
                        </td>
                        <td class="px-6 py-4 text-center">
                            10/26/2022
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button class="px-5 py-1 text-blue-600 bg-blue-300 w-full rounded-full text-center font-medium hover:bg-blue-400 duration-300">
                                Lihat
                            </button>
                        </td>
                    </tr>

                    {{-- Data 4 --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            4
                        </th>
                        <td class="p-4">
                            Laporan Denda Tahun 2023.pdf
                        </td>
                        <td class="px-6 py-4 text-center">
                            910kb
                        </td>
                        <td class="px-6 py-4 text-center">
                            10/26/2022
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button class="px-5 py-1 text-blue-600 bg-blue-300 w-full rounded-full text-center font-medium hover:bg-blue-400 duration-300">
                                Lihat
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