@include('partials.homeNavbar')

<div class="h-22 w-full bg-primary1">
    <div class="flex h-full items-center">
      <!-- Judul -->
      <div class="mt-4 px-5 text-white font-medium text-3xl"> Data Siswa</div>
    </div>
</div>
<div class="w-full px-5">
    <div class="flex my-4">
        <a href="/listBuku" class="font-medium text-base text-fontSubJudul px-5 py-1 hover:scale-105 hover:text-primary1 rounded-full hover:bg-bgSubJudul duration-300">
            List Buku
          </a>
        <a href="#" class="font-medium text-base text-primary1 px-5 py-1 ml-11 rounded-full bg-bgSubJudul hover:scale-105 duration-300">
            Riwayat
        </a>
    </div>

    <div class="w-full h-full bg-white rounded-lg">
        Riwayat
    </div>
</div>

@include('partials.footer')