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
        <a href="/riwayat" class="font-medium text-base text-fontSubJudul px-5 py-1 ml-11 hover:scale-105 hover:text-primary1 rounded-full hover:bg-bgSubJudul duration-300">
            Riwayat
        </a>
        <a href="#" class="font-medium text-base items-center text-primary1 px-5 py-1 ml-11 rounded-full bg-bgSubJudul hover:scale-105 duration-300">
            Profil
        </a>
    </div>

    <div class="lg:w-1/2 w-full mx-auto h-full bg-white rounded-lg">
        <div class="p-5">
            <h1 class="lg:text-4xl text-3xl text-gray-800 mb-5 font-semibold text-center">Profil</h1>
            <hr>
            <div class="lg:w-3/4 w-full mt-5 grid grid-cols-2 gap-y-4 pb-5">
                <div>NISN</div>
                <div>: 7268768</div>

                <div>Nama</div>
                <div>: Ahmad Abdullah</div>

                <div>Jurusan</div>
                <div>: Teknik Kendaraan Ringan</div>

                <div>Nomor Telpon</div>
                <div>: 085357679796</div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')