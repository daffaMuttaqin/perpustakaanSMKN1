{{-- Header --}}
@include('partials.header')
    
<!-- Navbar -->
<nav class="flex fixed z-40 h-22 w-full px-7 bg-primary1 justify-between shadow-xl inset-0">
  <!-- Bagian Kiri Logo dan Nama Sekolah -->
  <div class="flex items-center">
    <!-- Logo -->
    <a href="/" class="hover:scale-110 duration-300">
      <!-- Logo -->
      <img
          src="img/icon.png"
          alt=""
      />
    </a>
    <!-- Nama Sekolah -->
    <div class="font-bold ml-7 text-white text-xl">
      Perpustakaan SMK N1 Bumi Ratu Nuban
    </div>
  </div>

  <!-- Bagian Kanan Notifikasi dan Avatar -->
  <div class="flex items-center">
    <!-- Icon Notifikasi -->
    <button data-modal-target="notifikasi-modal" data-modal-toggle="notifikasi-modal" type="button">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="w-10 h-10 hover:scale-110 duration-100 text-white mx-5"
        >
          <path
            fill-rule="evenodd"
            d="M5.25 9a6.75 6.75 0 0 1 13.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 0 1-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 1 1-7.48 0 24.585 24.585 0 0 1-4.831-1.244.75.75 0 0 1-.298-1.205A8.217 8.217 0 0 0 5.25 9.75V9Zm4.502 8.9a2.25 2.25 0 1 0 4.496 0 25.057 25.057 0 0 1-4.496 0Z"
            clip-rule="evenodd"
          />
        </svg>
    </button>

    <!-- Avatar Profile -->
    <div>
      <img
        id="avatarButton"
        type="button"
        data-dropdown-toggle="userDropdown"
        data-dropdown-placement="bottom-start"
        class="w-12 h-12 rounded-full cursor-pointer"
        src="{{ asset('storage/avatar/' . Auth::user()->avatar) }}"
        alt="User dropdown"
      />

      <!-- Dropdown menu -->
      <div
        id="userDropdown"
        class="z-10 w-1/4 hidden bg-white divide-y divide-gray-100 rounded-lg shadow"
      >
        <div
          class="px-4 py-3 text-sm text-gray-900 text-center justify-center"
        >
          <div class="font-normal text-3xl py-2">Profil</div>
          <hr />
          <!-- Avatar didalam Drop Down -->
          <img class="w-28 h-28 mx-auto mt-5 mb-3 rounded-full" src="{{ asset('storage/avatar/' . Auth::user()->avatar) }}" alt="Rounded avatar"
          />
          <!-- Nama & Icon Edit -->
          <div class="flex w-full py-1 justify-center">
            <div class="font-medium truncate px-2">{{ Auth::user()->name }}</div>
            {{-- Button Edit --}}
            <a href="/dataPekerja"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
              </svg>
            </a>
          </div>
          <!-- Badge Admin -->
          <div class="py-2">
            <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300"
              >{{ Auth::user()->role }}</span>
          </div>
          <hr />
          <!-- NIK -->
          <div class="py-2">{{ Auth::user()->nip }}</div>
          <hr />
          <!-- Nomor Telpon -->
          <div class="py-2">Nomor Telpon : {{ Auth::user()->phone }}</div>
          <hr />
          <!-- Tombol Keluar -->
          <div class="py-2">
            <a href="/keluar" class="bg-primary1 hover:bg-blue-800 duration-300 text-white text-center px-6 py-1 rounded-full">
              Keluar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

    <div class="h-22 w-full bg-primary1"></div>
    <div class="h-22 w-full bg-primary1">
      <div class="flex h-full items-center">
        <!-- Void untuk menggeser Judul ke Kanan -->
        <div class="w-1/5"></div>
        <!-- Judul -->
        <div class="mt-4 text-white font-medium text-3xl"> {{ $title }}</div>
      </div>
    </div>

    <!-- SIDE BAR -->
    <div class="fixed top-32 left-4 w-2/12 bg-white h-4/5 rounded-xl shadow-lg">
        <div class="grid grid-rows-4 grid-flow-col gap-4 h-full w-full">
            {{-- Avatar Sidebar --}}
            <div>
                <img
                    class="w-16 h-16 mx-auto mt-16 mb-3 rounded-full"
                    src="{{ asset('storage/avatar/' . Auth::user()->avatar) }}"
                    alt="Rounded avatar"
                />
                <!-- Nama & Icon Edit -->
                <div class="flex w-full mt-1 justify-center">
                    <div class="font-bold truncate px-2">{{ Auth::user()->name }}</div>
                </div>
                <!-- Badge Admin -->
                <div class="mt-1 text-center">
                    <span class="bg-green-100 text-green-800 text-xs font-base px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">{{ Auth::user()->role }}</span>
                </div>
            </div>
            
            {{-- Menu Sidebar --}}
            <div class="row-span-2 mt-9">
                <div class="flex flex-col">
                    {{-- Tombol Sedang aktif --}}
                    <a href="/dataBuku" class="flex bg-bgSubJudul py-1 mx-3 rounded-full">
                        <svg class="w-6 h-6 ml-7 mr-2 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 17V2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M5 15V1m8 18v-4"/>
                        </svg>
                        <div class="text-primary1 font-semibold">Data Buku</div>
                    </a>
                    {{-- End Tombol Sedang Aktif --}}

                    {{-- Tombol Tidak Aktif --}}
                    <a href="/dataAnggota" class="flex py-1 mx-3 rounded-full hover:bg-bgSubJudul hover:font-semibold duration-100">
                        <svg class="w-6 h-6 ml-7 mr-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.333 6.764a3 3 0 1 1 3.141-5.023M2.5 16H1v-2a4 4 0 0 1 4-4m7.379-8.121a3 3 0 1 1 2.976 5M15 10a4 4 0 0 1 4 4v2h-1.761M13 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-4 6h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                          </svg>
                        <div class="">Data Anggota</div>
                    </a>
                    {{-- End Tombol Tidak Aktif --}}
                    
                    <a href="/dataPekerja" class="flex py-1 mx-3 rounded-full hover:bg-bgSubJudul hover:font-semibold duration-100">
                        <svg class="w-6 h-6 ml-7 mr-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3a3 3 0 1 1-1.614 5.53M15 12a4 4 0 0 1 4 4v1h-3.348M10 4.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0ZM5 11h3a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z"/>
                          </svg>
                        <div class="">Data Pekerja</div>
                    </a>

                    <a href="/transaksi" class="flex py-1 mx-3 rounded-full hover:bg-bgSubJudul hover:font-semibold duration-100">
                        <svg class="w-6 h-6 ml-7 mr-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h6m-6 4h6m-6 4h6M1 1v18l2-2 2 2 2-2 2 2 2-2 2 2V1l-2 2-2-2-2 2-2-2-2 2-2-2Z"/>
                          </svg>
                        <div class="">Transaksi</div>
                    </a>

                    <a href="/dataLaporan" class="flex py-1 mx-3 rounded-full hover:bg-bgSubJudul hover:font-semibold duration-100">
                        <svg class="w-6 h-6 ml-7 mr-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.828 10h6.239m-6.239 4h6.239M6 1v4a1 1 0 0 1-1 1H1m14-4v16a.97.97 0 0 1-.933 1H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2Z"/>
                          </svg>
                        <div class="">Laporan</div>
                    </a>
                </div>
            </div>

            {{-- Tombol Keluar Sidebar --}}
            <div class="flex items-end mb-4">
                <a href="/keluar" class="w-1/2 h-max py-1 mx-auto text-white text-center bg-primary1 rounded-full hover:bg-blue-800 duration-300">Keluar </a>
            </div>
            {{-- End Tombol Keluar --}}
        </div>
    </div>

    <div style="height: 78%;" class="flex w-full">
      <!-- Void untuk menggeser konten ke kanan -->
      <div class="h-full w-1/5"></div>

      <div class="w-4/5 pr-14">
          <!-- Sub Judul -->
          <div class="flex mt-4">
            {{-- Class Sub Judul Aktif --}}
            @if ($subJudul == '')
            @else
            <a href="{{ route($subJudul) }}" class="font-medium text-base text-primary1 px-5 py-1 rounded-full bg-bgSubJudul">
              {{ $subJudul }}
            </a>
            @endif
            
            {{-- Class Sub Judul Normal --}}
            @if ($subJudul2 == '')
            @else
            <a href="{{ route($subJudul2) }}" class="font-medium text-base text-fontSubJudul px-5 py-1 ml-11">
              {{ $subJudul2 }}
            </a>
            @endif

            {{-- Class Sub Judul Normal --}}
            @if ($subJudul3 == '')
            @else
            <a href="{{ route($subJudul3) }}" class="font-medium text-base text-fontSubJudul px-5 py-1 ml-11">
              {{ $subJudul3 }}
            </a>
            @endif

          </div>
          {{-- End Sub Judul --}}

          {{-- KONTEN --}}
          <div  class="w-full mt-5 p-7 bg-white rounded-xl shadow-lg">
            @yield('konten')
          </div>
          {{-- END KONTEN --}}
          <div class="pt-10">
          </div>
      </div>
    </div>

<!-- NOTIFIKASI MODAL -->
<div id="notifikasi-modal" data-modal-placement="top-right" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
  <div class="relative w-full max-w-2xl max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
              <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                  Notifikasi
              </h3>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="notifikasi-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5 space-y-4">

              <div class="grid grid-cols-8 gap-y-6 pb-4">
                {{-- Notifikasi 1 --}}
                {{-- Avatar --}}
                <img class="w-12 h-12 rounded-full mx-auto col-span-1" src="{{ asset('storage/avatar/' . Auth::user()->avatar) }}" alt="Rounded avatar">
                {{-- Teks Notifikasi --}}
                <div class="col-span-7">
                  Dwi Annisa dari X TKJ 1 telah jatuh tempo untuk mengembalikan buku, tanggal peminjaman 10/11/2023
                </div>

                {{-- Notifikasi 2 --}}
                {{-- Avatar --}}
                <img class="w-12 h-12 rounded-full mx-auto col-span-1" src="{{ asset('storage/avatar/' . Auth::user()->avatar) }}" alt="Rounded avatar">
                {{-- Teks Notifikasi --}}
                <div class="col-span-7">
                  Kepala sekolah telah menyetujui Laporan Request Buku Baru yang anda ajukan
                </div>

                {{-- Notifikasi 3 --}}
                {{-- Avatar --}}
                <img class="w-12 h-12 rounded-full mx-auto col-span-1" src="{{ asset('storage/avatar/' . Auth::user()->avatar) }}" alt="Rounded avatar">
                {{-- Teks Notifikasi --}}
                <div class="col-span-7">
                  Dwi Annisa dari X TKJ 1 telah jatuh tempo untuk mengembalikan buku, tanggal peminjaman 10/11/2023
                </div>

              </div>

          </div>
      </div>
  </div>
</div>
    @include('partials.footer')