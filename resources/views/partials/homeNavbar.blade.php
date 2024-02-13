{{-- Header --}}
@include('partials.header')

<!-- Navbar -->
<!-- Navbar -->
<nav class="flex fixed z-40 h-22 w-full lg:px-7 px-3 bg-primary1 justify-between shadow-xl inset-0">
    <!-- Bagian Kiri Logo dan Nama Sekolah -->
    <div class="flex items-center">
      <!-- Logo -->
      <a href="/" class="hover:scale-110 duration-300">
        <!-- Logo -->
        <img
            src="img/icon.png"
            alt=""
            class="w-20 lg:w-10 ml-2 lg:ml-0"
        />
      </a>
      <!-- Nama Sekolah -->
      <div class="font-bold ml-7 text-white lg:text-xl text-lg">
        Perpustakaan SMK N1 Bumi Ratu Nuban
      </div>
    </div>
  
    <!-- Bagian Kanan Notifikasi dan Avatar -->
    <div class="flex items-center">

      @if (Auth::guest())
      <!-- Tombol Masuk -->
      <a href="/masuk" class="font-semibold lg:text-xl scale-90 lg:scale-100 text-lg text-white border-2 border-white px-4 rounded-full hover:scale-110 duration-300">Masuk</a>
      @else (Auth::user()->role == "Student")
      <!-- Tombol Masuk -->
      <a href="/keluar" class="font-semibold lg:text-xl scale-90 lg:scale-100 text-lg text-white border-2 border-white px-4 rounded-full hover:scale-110 duration-300">Keluar</a>
      @endif
    </div>
</nav>

<div class="h-22"></div>