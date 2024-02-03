@include('partials.homeNavbar')

<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:my-10 lg:py-0">
    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                Buat akun
            </h1>
            <form class="space-y-4 md:space-y-6" action="#">
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5" placeholder="Nama anda" required="">
                </div>
                <div>
                    <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan</label>
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5">
                        <option selected>Pilih jurusan</option>
                        <option value="TKJ">Teknik Komputer dan Jaringan</option>
                        <option value="TKR">Teknik Kendaraan Ringan</option>
                        <option value="TP">Teknik Pengelasan</option>
                    </select>
                </div>
                <div>
                    <label for="nomorTelpon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telpon</label>
                    <input type="text" name="nomorTelpon" id="nomorTelpon" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5" placeholder="08123456789" required="">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5" required="">
                </div>
                <div>
                    <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                    <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5" required="">
                </div>
                <button type="submit" class="w-full text-white bg-primary1 hover:bg-blue-800 duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Buat Akun</button>
                <p class="text-sm font-light text-gray-500">
                    Sudah punya akun? <a href="/" class="font-medium text-primary1 hover:underline">Masuk</a>
                </p>
            </form>
        </div>
    </div>
</div>

<div class="md:mt-10"></div>

@include('partials.footer')