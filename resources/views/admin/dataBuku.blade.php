@extends('layouts.main')
@section('konten')

{{-- KONTEN --}}
<div class="w-full h-full">
    <div class="flex items-center gap-x-24">
        {{-- Tombol Buku Baru --}}
        <button data-modal-target="tambahBuku" data-modal-toggle="tambahBuku" class="text-lg text-white text-center ml-10 px-5 py-1 rounded-full bg-primary1 hover:bg-blue-800 duration-300">Tambah Buku</button>
        {{-- Search Bar --}}
        <form class="w-5/12 z-10">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input name="title" type="search" id="default-search" class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-primary1" placeholder="Pencarian buku">
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
                            Penulis
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
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                @php $i = 1 @endphp
                @foreach ($books as $item)

                    {{-- Data  --}}
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap"> 
                            @php echo($i++) @endphp
                        </th>
                        <td class="p-4">
                            <img src="{{ asset('storage/cover-book/' . $item->cover) }}" class="w-16 md:w-32 max-w-full max-h-full" alt="Book">
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->title }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->creator }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->publisher }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->ISBN}}
                        </td>
                        <td class="px-6 py-4 text-center">
                            {{ $item->stock }}
                        </td>
                        <td class="px-6 py-4">
                            @if ( $item->stock == 0 )
                            <div class="px-5 py-1 text-sm text-red-600 bg-red-300 w-full rounded-full text-center font-medium hover:bg-red-400 duration-300">
                                Tidak Tersedia
                            </div>
                            @else
                            <div class="px-5 py-1 text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                Tersedia
                            </div>
                            @endif
                        </td>
                        <td class="flex px-6 py-4 text-center justify-center">
                            <a href="">
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

                @endforeach

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
            <form action="/tambahBuku" method="POST" class="max-w-3xl mx-auto my-5 pb-5" enctype="multipart/form-data">
            @csrf
            
                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="cover">Sampul</label>
                    <input id="cover" name="cover" type="file" accept="image/png, image/jpeg" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none">
                </div>

                <div class="mb-5">
                  <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Buku</label>
                  <input id="title" name="title" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="Masukkan Judul Buku" required>
                </div>

                <div class="mb-5">
                  <label for="creator" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis</label>
                  <input id="creator" name="creator" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="Masukkan nama penulis" required>
                </div>

                <div class="mb-5">
                    <label for="publisher" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penerbitan</label>
                    <input id="publisher" name="publisher" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="Masukkan nama Penerbit" required>
                </div>

                <div class="mb-5">
                    <label for="ISBN" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ISBN</label>
                    <input id="ISBN" name="ISBN" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="Masukkan ISBN" required>
                </div>

                <div class="mb-5">
                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ketersediaan</label>
                    <input id="stock" name="stock" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="Masukkan jumlah buku" required>
                </div>

                <button type="submit" class="text-white bg-primary1 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
              </form>
        </div>
    </div>
</div> 

{{-- MODAL DELETE BUKU --}}
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
                <a href="/hapusBuku/{{ $item->id }}" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                    Hapus buku
                </a>
                <button data-modal-hide="delete-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batalkan</button>
            </div>
        </div>
    </div>
</div>

{{-- END KONTEN --}}
@endsection