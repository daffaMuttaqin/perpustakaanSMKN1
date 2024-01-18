    {{-- Header --}}
    @include('partials.header')
    
    {{-- Navbar --}}
    @include('partials.navbar')

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
                    src="img/profile.png"
                    alt="Rounded avatar"
                />
                <!-- Nama & Icon Edit -->
                <div class="flex w-full mt-1 justify-center">
                    <div class="font-bold truncate px-2">Muchsinin</div>
                </div>
                <!-- Badge Admin -->
                <div class="mt-1 text-center">
                    <span class="bg-green-100 text-green-800 text-xs font-base px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Administrator</span>
                </div>
            </div>
            
            {{-- Menu Sidebar --}}
            <div class="row-span-2 mt-9">
                <div class="flex flex-col">
                    {{-- Tombol Sedang aktif --}}
                    <button class="flex bg-bgSubJudul py-1 mx-3 rounded-full">
                        <svg class="w-6 h-6 ml-7 mr-2 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 17V2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H3a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h12M5 15V1m8 18v-4"/>
                        </svg>
                        <div class="text-primary1 font-semibold">Data Buku</div>
                    </button>
                    {{-- End Tombol Sedang Aktif --}}

                    {{-- Tombol Tidak Aktif --}}
                    <button class="flex py-1 mx-3 rounded-full hover:bg-bgSubJudul hover:font-semibold duration-100">
                        <svg class="w-6 h-6 ml-7 mr-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.333 6.764a3 3 0 1 1 3.141-5.023M2.5 16H1v-2a4 4 0 0 1 4-4m7.379-8.121a3 3 0 1 1 2.976 5M15 10a4 4 0 0 1 4 4v2h-1.761M13 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-4 6h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                          </svg>
                        <div class="">Data Anggota</div>
                    </button>
                    {{-- End Tombol Tidak Aktif --}}
                    
                    <button class="flex py-1 mx-3 rounded-full hover:bg-bgSubJudul hover:font-semibold duration-100">
                        <svg class="w-6 h-6 ml-7 mr-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 3a3 3 0 1 1-1.614 5.53M15 12a4 4 0 0 1 4 4v1h-3.348M10 4.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0ZM5 11h3a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z"/>
                          </svg>
                        <div class="">Data Pekerja</div>
                    </button>

                    <button class="flex py-1 mx-3 rounded-full hover:bg-bgSubJudul hover:font-semibold duration-100">
                        <svg class="w-6 h-6 ml-7 mr-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h6m-6 4h6m-6 4h6M1 1v18l2-2 2 2 2-2 2 2 2-2 2 2V1l-2 2-2-2-2 2-2-2-2 2-2-2Z"/>
                          </svg>
                        <div class="">Transaksi</div>
                    </button>

                    <button class="flex py-1 mx-3 rounded-full hover:bg-bgSubJudul hover:font-semibold duration-100">
                        <svg class="w-6 h-6 ml-7 mr-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.828 10h6.239m-6.239 4h6.239M6 1v4a1 1 0 0 1-1 1H1m14-4v16a.97.97 0 0 1-.933 1H1.933A.97.97 0 0 1 1 18V5.828a2 2 0 0 1 .586-1.414l2.828-2.828A2 2 0 0 1 5.828 1h8.239A.97.97 0 0 1 15 2Z"/>
                          </svg>
                        <div class="">Laporan</div>
                    </button>
                </div>
            </div>

            {{-- Tombol Keluar Sidebar --}}
            <div class="flex items-end mb-4">
                <button class="w-1/2 h-max py-1 mx-auto text-white bg-primary1 rounded-full hover:bg-blue-800 duration-300">Keluar
                </button>
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
            <button
              class="font-medium text-base text-primary1 px-5 py-1 rounded-full bg-bgSubJudul"
            >
              {{ $title }}
            </button>
    
            <button class="font-medium text-base text-fontSubJudul px-5 py-1 ml-11">
              Data Rekomendasi Buku
            </button>
          </div>
          {{-- End Sub Judul --}}

          {{-- KONTEN --}}
          <div style="height: 83%" class="w-full mt-5 p-7 bg-white rounded-xl shadow-lg">
            @yield('konten')
          </div>
          {{-- END KONTEN --}}
      </div>
    </div>
    @include('partials.footer')