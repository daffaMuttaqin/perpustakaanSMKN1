@include('partials.homeNavbar')

{{-- Konten --}}
<div class="flex flex-col items-center justify-center mt-8 px-6 py-8 mx-auto md:h-screen lg:py-0">
    <div class="w-full bg-white rounded-lg shadow-lg md:mt-0 sm:max-w-md xl:p-0 ">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                Masukkan ID
            </h1>
            <form class="space-y-4 md:space-y-6" action="#">
                <div>
                    <label for="id" class="block mb-2 text-sm font-medium text-gray-900">ID</label>
                    <input type="id" name="id" id="id" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5" placeholder="00112233" required="">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Kata Sandi</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5" required="">
                </div>
                <div class="flex items-center justify-between">
                    <a href="#" class="text-sm font-medium text-primary1 hover:underline dark:text-primary-500">Lupa kata sandi?</a>
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

@include('partials.footer')