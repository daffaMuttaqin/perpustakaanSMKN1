@extends('layouts.main')
@section('konten')
{{-- KONTEN --}}
<div class="w-full h-full">
    <div class="flex items-center gap-x-24">
        {{-- Tambah Pekerja --}}
        <button data-modal-target="tambahPekerja" data-modal-toggle="tambahPekerja" type="button" class="text-lg text-white text-center ml-10 px-5 py-1 rounded-full bg-primary1 hover:bg-blue-800 duration-300">Tambah Pekerja</button>
        
        {{-- Search Bar --}}
        <form class="w-5/12 z-10">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input name="title" type="search" id="default-search" class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-primary1" placeholder="Pencarian Pekerja" required>
            </div>
        </form>
    </div>

    {{-- TABEL --}}
    <div class="mt-5">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Pengguna
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NIP
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Pekerja
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor Telpon
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($users as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $loop->iteration }}
                        </th>
                        <td class="px-6">
                            {{ $item->username }}
                        </td>
                        <td class="px-6">
                            {{ $item->nip }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->role }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->phone }}
                        </td>
                        <td class="flex px-6 py-4 text-center justify-center">
                            <button data-modal-target="editPekerja{{ $item->id }}" data-modal-toggle="editPekerja{{ $item->id }}">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                  </svg>      
                            </button>
                            <button data-modal-target="delete-modal{{ $item->id }}" data-modal-toggle="delete-modal{{ $item->id }}" type="button">
                                <svg class="w-5 h-5 ml-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                </svg>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Data tidak ditemukan
                        </th>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>





{{-- MODAL PEKERJA BARU --}}
<!-- Main modal -->
<div id="tambahPekerja" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Pekerja
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="tambahPekerja">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <!-- Modal body -->
            <form action="/tambahPekerja" method="POST" class="max-w-3xl mx-auto my-5 pb-5" enctype="multipart/form-data">
            @csrf

                <div class="mb-5">    
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Foto Profil</label>
                    <input id="avatar" name="avatar" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" required>
                </div>
            
                <div class="mb-5">
                  <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pengguna</label>
                  <input id="username" name="username" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="Masukkan Nama Pengguna" required>
                </div>

                <div class="mb-5">
                  <label for="nip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                  <input id="nip" name="nip" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="Masukkan NIP" required>
                </div>

                <div class="mb-5">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pekerja</label>
                  <input id="name" name="name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="Masukkan nama pekerja" required>
                </div>

                <div class="mb-5">
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                    <select name="role" id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5">
                        <option selected>Pilih Role</option>
                        <option value="Admin">Admin</option>
                        <option value="KepalaSekolah">Kepala Sekolah</option>
                    </select>
                </div>

                <div class="mb-5">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telpon</label>
                    <input id="phone" name="phone" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" placeholder="Masukkan nomor telpon" required>
                </div>

                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata Sandi</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5" required>
                </div>

                <div class="mb-5">
                    <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Kata Sandi</label>
                    <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5" required>
                </div>

                <button type="submit" class="text-white bg-primary1 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
              </form>
        </div>
    </div>
</div>


{{-- MODAL EDIT PEKERJA --}}
@foreach ($users as $item)
<!-- Main modal -->
<div id="editPekerja{{ $item->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-4xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Edit Pekerja
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="editPekerja{{ $item->id }}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>

            <!-- Modal body -->
            <form action="/updatePekerja/{{ $item->id }}" method="POST" class="max-w-3xl mx-auto my-5 pb-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="text" name="oldPassword" value="{{ $item->password }}" hidden>

                <div class="mb-5">
                    
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Foto Profil</label>
                    <img src="{{ asset('storage/avatar/' . $item->avatar) }}" class="w-16 md:w-32 max-w-full max-h-full mb-5" alt="Book">
                    <input name="avatar" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file" value="{{ $item->avatar }}">

                </div>
            
                <div class="mb-5">
                  <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pengguna</label>
                  <input id="username" name="username" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" value="{{ $item->username }}" required>
                </div>

                <div class="mb-5">
                  <label for="nip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                  <input id="nip" name="nip" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" value="{{ $item->nip }}" required>
                </div>

                <div class="mb-5">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pekerja</label>
                  <input id="name" name="name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" value="{{ $item->name }}" required>
                </div>

                <div class="mb-5">
                    <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                    <select name="role" id="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5">
                        <option value="Admin" {{ $item->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                        <option value="KepalaSekolah" {{ $item->role == 'KepalaSekolah' ? 'selected' : '' }}>Kepala Sekolah</option>
                    </select>
                </div>

                <div class="mb-5">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telpon</label>
                    <input id="phone" name="phone" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700" value="{{ $item->phone }}" required>
                </div>

                <div class="mb-5">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata Sandi Baru</label>
                    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5" placeholder="Diisi jika ingin mengganti kata sandi">
                </div>

                <div class="mb-5">
                    <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Kata Sandi</label>
                    <input type="password" name="confirm-password" id="confirm-password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary1 focus:border-primary1 block w-full p-2.5" placeholder="Diisi jika ingin mengganti kata sandi">
                </div>

                <button type="submit" class="text-white bg-primary1 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
              </form>
        </div>
    </div>
</div>

{{-- MODAL DELETE PEKERJA--}}
<div id="delete-modal{{ $item->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="delete-modal{{ $item->id }}">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin?</h3>
                <a href="/hapusPekerja/{{ $item->id }}" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                    Hapus Pekerja
                </a>
                <button data-modal-hide="delete-modal{{ $item->id }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batalkan</button>
            </div>
        </div>
    </div>
</div>
@endforeach

{{-- END KONTEN --}}
@endsection