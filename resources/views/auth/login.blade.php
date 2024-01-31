{{-- Navbar Login --}}
@include('partials.loginNavbar')

<div class="w-full mt-9 pb-9 rounded-full">
    <div class="flex w-full justify-center rounded-xl">
        <div>
            <img src="img/login.png" alt="">
        </div>

        {{-- Form Login --}}
        <div class="w-2/6  bg-white">
            <div class="h-full place-items-center my-12 mx-10">
                <div class="text-3xl mb-8 text-center tracking-widest font-fira">
                    <h1 style="color: #6F0056">SMK NEGERI 1</h1>
                    <h1 style="color: #1E35AD">BUMI RATU NUBAN</h1>
                </div>
                <hr>
                <h1 class="text-xl text-center tracking-widest my-6 font-robotoCondensed" style="color: #828282">SILAHKAN LOGIN</h1>
                <hr>

                {{-- FORM LOGIN --}}
                <form id="formLogin" action="/masuk" method="POST">
                @csrf 
                    {{-- Input Username --}}
                    <input type="text" id="username" name="username" class="bg-gray-50 mt-6 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5" placeholder="Nama Pengguna">

                    {{-- Input Password --}}
                    <input type="password" id="password" name="password" class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5" placeholder="Kata sandi">

                    {{-- Tombol Lupa Sandi --}}
                    <div class="mt-3">
                        Lupa <button class="text-primary1 hover:underline duration-300" data-modal-target="kata-sandi-modal" data-modal-toggle="kata-sandi-modal" type="button">Kata Sandi</button>?
                    </div>
                    
                    {{-- Button Submit --}}
                    <button class="text-white bg-primary1 py-2 w-full rounded-lg mt-5 hover:bg-blue-800 duration-300" type="submit">Masuk</button>
                </form>
                {{-- END FORM LOGIN --}}

            </div>
        </div>
    </div>
</div>



{{-- MODAL LUPA KATA SANDI--}}
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
                    Silahkan untuk menghubungi administrator untuk melakukan penggantian kata sandi
                </p>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')