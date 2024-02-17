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
                <input type="search" name="title" id="default-search" class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-primary1" placeholder="Pencarian Transaksi" required>
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
                            Pengembalian
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
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
                            {{ $item->user->jurusan }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->book->title }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $item->rentDate }}
                        </td>
                        <td class="px-6 py-4 text-center">
                        <form action="/terimaPinjam/{{ $item->id }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="relative max-w-sm">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                   <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                      <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                    </svg>
                                </div>
                                <input name="returnDate" datepicker datepicker-autohide datepicker-format="yyyy-mm-dd" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center flex gap-x-2">
                            <button type="submit" class="px-5 py-1 text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Terima
                            </button>
                        </form>

                        <form action="/tolakPinjam/{{ $item->id }}" method="POST">
                        @csrf
                        @method('PUT')
                            <button type="submit" class="px-5 py-1 text-sm text-red-600 bg-red-300 w-full rounded-full text-center font-medium hover:bg-red-400 duration-300">
                                Tolak
                            </button>
                        </form>
                        </td>
                    </tr>
                @empty

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Tidak Ada Data
                        </th>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- END KONTEN --}}
@endsection