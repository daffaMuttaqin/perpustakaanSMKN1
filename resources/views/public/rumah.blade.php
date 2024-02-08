@include('partials.homeNavbar')

{{-- Konten --}}
<div class="flex flex-col items-center justify-center mt-8 px-6 py-8 mx-auto md:h-screen lg:py-0">
    <div class="w-full bg-white rounded-lg shadow-lg md:mt-0 sm:max-w-md xl:p-0 ">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                Selamat Datang
            </h1>
            <form class="space-y-4 md:space-y-6" action="#">
                <div>
                    <label for="nisn" class="block mb-2 text-sm font-medium text-gray-900">NISN</label>
                    <input type="nisn" name="nisn" id="nisn" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5" placeholder="00112233" required="">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Kata Sandi</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5" required="">
                </div>
                <div class="flex items-center justify-between">
                    <button data-modal-target="kata-sandi-modal" data-modal-toggle="kata-sandi-modal" type="button" class="text-sm font-medium text-primary1 hover:underline">Lupa kata sandi?</button>
                </div>
                <button type="submit" class="w-full text-white bg-primary1 hover:bg-blue-800 duration-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Masuk                    
                </button>
                <p class="text-sm font-light text-gray-500">
                    Tidak punya akun? <a href="/daftar" class="font-medium text-primary1 hover:underline dark:text-blue-500">Daftar</a>
                </p>
            </form>
        </div>
    </div>
</div>



{{-- MODAL LUPA KATA SANDI --}}
<div id="kata-sandi-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Lupa Kata Sandi
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="kata-sandi-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                    Silahkan menghubungi Admin untuk melakukan penggantian kata sandi
                </p>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')