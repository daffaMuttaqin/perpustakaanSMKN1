@include('partials.homeNavbar')

<div class="h-22 w-full bg-primary1">
    <div class="flex h-full items-center">
      <!-- Judul -->
      <div class="mt-4 px-5 text-white font-medium text-2xl lg:text-3xl"> Data Siswa</div>
    </div>
</div>
<div class="w-full px-5">
    <div class="flex my-4">
        <a href="#" class="font-medium text-base text-primary1 px-5 py-1 rounded-full bg-bgSubJudul hover:scale-105 duration-300">
            List Buku
          </a>
        <a href="/riwayat" class="font-medium text-base text-fontSubJudul px-5 py-1 ml-11 hover:scale-105 hover:text-primary1 rounded-full hover:bg-bgSubJudul duration-300">
            Riwayat
        </a>
        <a href="/profil" class="font-medium text-base text-fontSubJudul px-5 py-1 ml-11 hover:scale-105 hover:text-primary1 rounded-full hover:bg-bgSubJudul duration-300">
            Profil
        </a>
    </div>

    <div class="w-full h-full bg-white rounded-lg">

        @if (Session::get('status') == 'success')
        <div id="alert-1" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{Session::get('message')}}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            </button>
        </div>
        @elseif (Session::get('status') == 'failed')
        <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{Session::get('message')}}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            </button>
        </div>
        @endif

        <div class="flex items-center mx-5 py-5">
            {{-- Search Bar --}}
            <form class="lg:w-5/12 w-full z-10">
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
        <div class="mt-5 p-5">
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
                            <th scope="col" class="px-6 py-3 text-left">
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
                    @foreach ($books as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="w-4 p-4 px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap"> 
                                {{ $loop->iteration }}
                            </th>
                            <td class="p-4">
                                <img src="{{ asset('storage/cover-book/' . $item->cover) }}" class="w-16 mx-auto md:w-32 max-w-full max-h-full" alt="Book">
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->title }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $item->creator }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $item->publisher }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $item->ISBN}}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $item->stock }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($item->stock == 0)
                                <div class="px-5 py-1 text-sm text-red-600 bg-red-300 w-full rounded-full text-center font-medium hover:bg-red-400 duration-300">
                                    Tidak Tersedia
                                </div>
                                @else
                                <div class="px-5 py-1 text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                    Tersedia
                                </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-center justify-center">
                                @if ($item->stock == 0)
                                <div class="px-5 py-1 text-gray-600 bg-gray-300 w-full rounded-full text-center font-medium hover:bg-gray-400 duration-300">
                                    Tidak Bisa Pinjam
                                </div>
                                @else
                                <button data-modal-target="pinjam-modal{{ $item->id }}" data-modal-toggle="pinjam-modal{{ $item->id }}" type="button" class="px-5 py-1 text-blue-600 bg-blue-300 w-full rounded-full text-center font-medium hover:bg-blue-400 duration-300">
                                    Pinjam
                                </button>
                                @endif
                            </td>
                        </tr>
    
                    @endforeach
    
                    </tbody>
                </table>

                {{-- Pagination --}}
                <div class="mt-4"> {{ $books->links('partials.myPaginate') }} </div>

            </div>
        </div>
    </div>
</div>

{{-- MODAL --}}

@foreach ($books as $item)
{{-- MODAL Pinjam BUKU --}}
<div id="pinjam-modal{{ $item->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="pinjam-modal{{ $item->id }}">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin meminjam buku ini?</h3>
                <form action="/pinjamBuku/{{ $item->id }}" method="POST">
                @csrf
                <input type="hidden" name="bookId" value="{{ $item->id }}">

                    <button type="submit" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                        Yakin
                    </button>

                    <button data-modal-hide="pinjam-modal{{ $item->id }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batalkan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach


@include('partials.footer')