<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PublicController::class, 'index']);

Route::get('/masuk', [AuthController::class, 'login'])->name('login');
Route::post('/masuk', [AuthController::class, 'authenticating']);

Route::middleware(['preventBackHistory','auth'])->group(function () {

    Route::get('/keluar', [AuthController::class, 'logout']);

    Route::middleware(['onlyAdmin'])->group(function () {

        Route::get('/dataBuku', [BookController::class, 'index'])->name('Data Buku');
        Route::post('/tambahBuku', [BookController::class, 'store']);
        Route::get('/hapusBuku/{id}', [BookController::class, 'destroy']);
    });
});

Route::get('/daftar', function () {
    return view('public/daftar', [
        "title" => "Daftar"
    ]);
});

Route::get('/dataPeminjaman', function () {
    return view('admin/dataPeminjaman', [
        "title" => "Data Buku",
        "subJudul" => "Data Buku",
        "subJudul2" => "Data Peminjaman",
        "subJudul3" => "",
    ]);
})->name('Data Peminjaman');

Route::get('/dataAnggota', function () {
    return view('admin/dataAnggota', [
        "title" => "Data Anggota",
        "subJudul" => "Data Anggota Perpustakaan",
        "subJudul2" => "",
        "subJudul3" => "",
    ]);
})->name('Data Anggota Perpustakaan');

Route::get('/dataPekerja', function () {
    return view('admin/dataPekerja', [
        "title" => "Data pekerja",
        "subJudul" => "Data Pekerja Perpustakaan",
        "subJudul2" => "",
        "subJudul3" => "",
    ]);
})->name('Data Pekerja Perpustakaan');

Route::get('/transaksi', function () {
    return view('admin/transaksi', [
        "title" => "Transaksi",
        "subJudul" => "Transaksi Buku",
        "subJudul2" => "",
        "subJudul3" => "",
    ]);
})->name('Transaksi Buku');

Route::get('/dataLaporan', function () {
    return view('admin/dataLaporan', [
        "title" => "Laporan",
        "subJudul" => "Data Laporan",
        "subJudul2" => "Bukti Setoran",
        "subJudul3" => "Upload Laporan",
    ]);
})->name('Data Laporan');

Route::get('/buktiSetoran', function () {
    return view('admin/buktiSetoran', [
        "title" => "Laporan",
        "subJudul" => "Data Laporan",
        "subJudul2" => "Bukti Setoran",
        "subJudul3" => "Upload Laporan",
    ]);
})->name('Bukti Setoran');

Route::get('/uploadLaporan', function () {
    return view('admin/uploadLaporan', [
        "title" => "Laporan",
        "subJudul" => "Data Laporan",
        "subJudul2" => "Bukti Setoran",
        "subJudul3" => "Upload Laporan",
    ]);
})->name('Upload Laporan');

Route::get('/kepsek', function () {
    return view('kepsek/daftarLaporan', [
        "title" => "Laporan",
        "subJudul" => "Daftar Laporan",
        "subJudul2" => "",
        "subJudul3" => "",
    ]);
});

Route::get('/perpustakaan', function () {
    return view('kepsek/perpustakaan', [
        "title" => "Perpustakaan",
        "subJudul" => "Buku",
        "subJudul2" => "",
        "subJudul3" => "",
    ]);
});
