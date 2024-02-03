{{-- Header --}}
@include('partials.header')

<!-- Navbar -->
<!-- Navbar -->
<nav class="flex fixed z-50 h-22 w-full px-7 bg-primary1 justify-between shadow-xl inset-0">
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
      <!-- Tombol Masuk -->
      <a href="/masuk" class="font-semibold text-xl text-white border-2 border-white px-4 rounded-full hover:scale-110 duration-300">Admin</a>
    </div>
</nav>

<div class="h-22"></div>