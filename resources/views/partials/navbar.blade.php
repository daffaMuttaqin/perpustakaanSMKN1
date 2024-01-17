<!-- Navbar -->
<nav
class="flex fixed h-22 w-full px-7 bg-primary1 justify-between shadow-xl inset-0"
>
<!-- Bagian Kiri Logo dan Nama Sekolah -->
<div class="flex items-center">
  <!-- Logo -->
  <img
    src="img/icon.png"
    alt=""
    class="pr-7"
  />
  <!-- Nama Sekolah -->
  <div class="font-bold text-white text-xl">
    Perpustakaan SMK N1 Bumi Ratu Nuban
  </div>
</div>

<!-- Bagian Kanan Notifikasi dan Avatar -->
<div class="flex items-center">
  <!-- Icon Notifikasi -->
  <button data-modal-target="medium-modal" data-modal-toggle="medium-modal" type="button">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        fill="currentColor"
        class="w-10 h-10 hover:w-11 hover:h-11 duration-100 text-white mx-5"
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
      src="img/profile.png"
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
        <img
          class="w-28 h-28 mx-auto mt-5 mb-3 rounded-full"
          src="img/profile.png"
          alt="Rounded avatar"
        />
        <!-- Nama & Icon Edit -->
        <div class="flex w-full py-1 justify-center">
          <div class="font-medium truncate px-2">Muchsinin</div>
          {{-- Button Edit --}}
          <button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
              <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
            </svg>
            </button>
        </div>
        <!-- Badge Admin -->
        <div class="py-2">
          <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300"
            >Administrator</span>
        </div>
        <hr />
        <!-- NIK -->
        <div class="py-2">NIK. 123 45 67 89</div>
        <hr />
        <!-- Nomor Telpon -->
        <div class="py-2">Nomor Telpon : 081234567890</div>
        <hr />
        <!-- Tombol Keluar -->
        <div class="py-2">
          <button
            class="bg-primary1 text-white text-center px-6 py-1 rounded-full"
          >
            Keluar
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
</nav>

{{-- MODAL --}}

<!-- Default Modal -->
<div id="medium-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Notifikasi
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="medium-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                </p>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                </p>
            </div>
        </div>
    </div>
</div>