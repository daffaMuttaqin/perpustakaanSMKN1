@include('partials.homeNavbar')

<div class="h-22 w-full bg-primary1">
    <div class="flex h-full items-center">
      <!-- Judul -->
      <div class="mt-4 px-5 text-white font-medium text-2xl lg:text-3xl"> Data Siswa</div>
    </div>
</div>
<div class="w-full px-5">
    <div class="flex my-4">
        <a href="/listBuku" class="font-medium text-base text-fontSubJudul px-5 py-1 hover:scale-105 hover:text-primary1 rounded-full hover:bg-bgSubJudul duration-300">
            List Buku
          </a>
        <a href="/riwayat" class="font-medium text-base text-primary1 px-5 py-1 ml-11 rounded-full bg-bgSubJudul hover:scale-105 duration-300">
            Riwayat
        </a>

        <a href="/profil" class="font-medium text-base text-fontSubJudul px-5 py-1 ml-11 hover:scale-105 hover:text-primary1 rounded-full hover:bg-bgSubJudul duration-300">
            Profil
        </a>
    </div>

    <div class="w-full h-full bg-white rounded-lg">

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
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Judul Buku
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penulis
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Tanggal Pinjam
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Tanggal Kembali
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($rents as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $loop->iteration }}
                            </th>
                            <td class="p-4">
                                {{ $item->book->title}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->book->creator }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $item->rentDate }}
                            </td>
                            <td class="px-6 py-4 text-center">
                                {{ $item->returnDate }}
                            </td>
                            <td class="flex px-6 py-4 text-center justify-center">
                                @if ($item->status == "Menunggu")
                                <div class="px-5 py-1 text-sm text-gray-600 bg-gray-300 w-1/2 rounded-full text-center font-medium hover:bg-gray-400 duration-300">
                                    Menunggu
                                </div>
                                @elseif ($item->status == "Masih Dipinjam")
                                <div class="px-5 py-1 text-sm text-blue-600 bg-blue-300 w-1/2 rounded-full text-center font-medium hover:bg-blue-400 duration-300">
                                    Masih Dipinjam
                                </div>
                                @elseif ($item->status == "Sudah Kembali")
                                <div class="px-5 py-1 text-sm text-green-600 bg-green-300 w-1/2 rounded-full text-center font-medium hover:bg-green-400 duration-300">
                                    Sudah Kembali
                                </div>
                                @elseif ($item->status == "Terlambat")
                                <div class="px-5 py-1 text-sm text-red-600 bg-red-300 w-1/2 rounded-full text-center font-medium hover:bg-red-400 duration-300">
                                    Terlambat
                                </div>
                                @elseif ($item->status == "Ditolak")
                                <div class="px-5 py-1 text-sm text-red-600 bg-red-300 w-1/2 rounded-full text-center font-medium hover:bg-red-400 duration-300">
                                    Ditolak
                                </div>
                                @endif
                            </td>
                        </tr>

                        @empty
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Tidak ada Data
                            </th>
                        </tr>
                        @endforelse

                    </tbody>
                </table>

                {{-- Pagination --}}
                <div class="mt-4"> {{ $rents->links('partials.myPaginate') }} </div>

            </div>
        </div>
    </div>
</div>

@include('partials.footer')