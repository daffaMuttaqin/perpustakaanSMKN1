<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                No
            </th>
            <th scope="col" class="px-6 py-3">
                NISN
            </th>
            <th scope="col" class="px-6 py-3">
                Nama Anggota
            </th>
            <th scope="col" class="px-6 py-3 text-center">
                Tanggal Pinjam
            </th>
            <th scope="col" class="px-6 py-3 text-center">
                Tanggal Kembali Seharusnya
            </th>
            <th scope="col" class="px-6 py-3 text-center">
                Tanggal Kembali
            </th>
            <th scope="col" class="px-6 py-3 text-center">
                Denda
            </th>
            <th scope="col" class="px-6 py-3 text-center">
                Status
            </th>
        </tr>
    </thead>
    <tbody>
        {{-- Data 1 --}}
        @forelse ($rents as $item)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                {{ $loop->iteration }}
            </th>
            <td class="px-6">
                {{ $item->user->username }}
            </td>
            <td class="px-6 py-4">
                {{ $item->user->name }}
            </td>
            <td class="px-6 py-4 text-center">
                {{ $item->rentDate }}
            </td>
            <td class="px-6 py-4 text-center">
                {{ $item->returnDate }}
            </td>
            <td class="px-6 py-4 text-center">
                {{ $item->actualReturnDate }}
            </td>
            <td class="px-6 py-4 text-center">
                {{ $item->penalty }}
            </td>
            <td class="px-6 py-4 text-center">
                @if ($item->status == "Masih Dipinjam")
                <div class="px-5 py-1 text-sm text-blue-600 bg-blue-300 w-full rounded-full text-center font-medium hover:bg-blue-400 duration-300">
                    Masih Dipinjam
                </div>
                @elseif ($item->status == "Sudah Kembali")
                <div class="px-5 py-1 text-sm text-green-600 bg-green-300 w-full rounded-full text-center font-medium hover:bg-green-400 duration-300">
                    Sudah Kembali
                </div>
                @elseif ($item->status == "Terlambat")
                <div class="px-5 py-1 text-sm text-red-600 bg-red-300 w-full rounded-full text-center font-medium hover:bg-red-400 duration-300">
                    Terlambat
                </div>
                @endif
            </td>
        </tr>
        @empty
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="w-4 p-4 px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                Data Tidak Ditemukan
            </th>
        </tr>
        
        @endforelse

    </tbody>
</table>