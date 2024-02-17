@extends('layouts.layout-kepsek')
@section('konten-kepsek')
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
                <input name="title" type="search" id="default-search" class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-primary1" placeholder="Pencarian Data" required>
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
                            Judul Buku
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Tanggal Pinjam
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Tanggal Kembali
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Denda
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Status
                        </th>
                    </tr>
                </thead>
                {{-- <tbody>
                    @forelse ($rents as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6">
                            {{ $item->user->username }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->user->name }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $item->rentDate }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $item->returnDate }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $item->penalty }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            @if ($item->status == "Masih Dipinjam")
                            <div class="px-5 py-1 text-sm text-blue-600 bg-blue-300 w-full rounded-full text-center font-medium hover:bg-blue-400 duration-300">
                                Masih Dipinjam
                            </div>
                            @elseif ($item->status == "Sudah Kembali")
                            <div class="px-5 py-1 text-sm text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Sudah Kembali
                            </div>
                            @elseif ($item->status == "Terlambat")
                            <div class="px-5 py-1 text-sm text-red-600 bg-red-300 w-full rounded-full text-center font-medium hover:bg-red-400 duration-300">
                                Terlambat
                            </div>
                            @endif
                        </td>
                        <td class="flex px-6 py-4 text-center justify-center">
                            <button data-modal-target="edit-status-modal{{ $item->id }}" data-modal-toggle="edit-status-modal{{ $item->id }}" type="button">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                  </svg>      
                            </button>
                            <button data-modal-target="delete-modal{{ $item->id }}" data-modal-toggle="delete-modal{{ $item->id }}" type="button">
                                <svg class="w-5 h-5 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Data Tidak Ditemukan
                        </th>
                    </tr>
                    
                    @endforelse

                </tbody> --}}

                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            1
                        </th>
                        <td class="px-6">
                            112131323
                        </td>
                        <td class="px-6 py-4">
                            Andi
                        </td>
                        <td class="px-6 py-4">
                            Pendidikan Agama Islam
                        </td>
                        <td class="px-6 py-4 text-center">
                            2/17/2024
                        </td>
                        <td class="px-6 py-4 text-center">
                            2/18/2024
                        </td>
                        <td class="px-6 py-4 text-center">
                            Rp. 25.000
                        </td>
                        <td class="px-6 py-4 text-center">
                            <div class="px-5 py-1 text-sm text-blue-600 bg-blue-300 w-full rounded-full text-center font-medium hover:bg-blue-400 duration-300">
                                Masih Dipinjam
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- END KONTEN --}}
@endsection