@extends('layouts.main')
@section('konten')
{{-- KONTEN --}}
<div class="flex items-center gap-x-24">
    <button class="text-lg text-white text-center ml-10 px-5 py-1 rounded-full bg-primary1 hover:bg-blue-800 duration-300">Buku Baru</button>

        <form class="w-5/12">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-primary1" placeholder="Pencarian buku" required>
            </div>
        </form>
</div>
{{-- END KONTEN --}}
@endsection