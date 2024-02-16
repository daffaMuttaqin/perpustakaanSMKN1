<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookRentUserController;
use App\Http\Controllers\BookRentController;
use App\Http\Controllers\RentLogController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/masuk', [AuthController::class, 'login'])->name('login');
    Route::post('/masuk', [AuthController::class, 'authenticating']);
    Route::get('/daftar', [AuthController::class, 'register'])->name('Daftar');
    Route::post('/daftar', [AuthController::class, 'store']);
});

Route::middleware(['auth'])->group(function () {

    Route::get('/keluar', [AuthController::class, 'logout']);

    Route::middleware(['onlyStudent'])->group(function () {
        Route::get('/listBuku', [StudentController::class, 'index'])->name('Data Siswa');
        Route::post('/pinjamBuku/{id}', [BookRentUserController::class, 'store']);
        Route::get('/riwayat', [StudentController::class, 'history'])->name('Data Siswa');
        Route::get('/profil', [StudentController::class, 'profile'])->name('Profil');
    });

    Route::middleware(['onlyAdmin'])->group(function () {

        Route::get('/dataBuku', [BookController::class, 'index'])->name('Data Buku');
        Route::post('/tambahBuku', [BookController::class, 'store']);
        Route::put('/updateBuku/{id}', [BookController::class, 'update']);
        Route::get('/hapusBuku/{id}', [BookController::class, 'destroy']);

        Route::get('/dataPeminjaman', [RentLogController::class, 'index'])->name('Data Peminjaman');
    
        Route::get('/dataAnggota', [UserController::class, 'indexStudent'])->name('Data Anggota Perpustakaan');
        Route::post('/tambahAnggota', [UserController::class, 'storeStudent']);
        Route::put('/updateAnggota/{id}', [UserController::class, 'updateStudent']);
        Route::get('/hapusAnggota/{id}', [UserController::class, 'destroyStudent']);

        Route::get('/dataPekerja', [UserController::class, 'indexAdmin'])->name('Data Pekerja Perpustakaan');
        Route::post('/tambahPekerja', [UserController::class, 'storeAdmin']);
        Route::put('/updatePekerja/{id}', [UserController::class, 'updateAdmin']);
        Route::get('/hapusPekerja/{id}', [UserController::class, 'destroyAdmin']);
        
        Route::get('/transaksi', [BookRentUserController::class, 'index'])->name('Transaksi Buku');

        Route::put('/tolakPinjam/{id}', [BookRentUserController::class, 'decline']);
        Route::put('/terimaPinjam/{id}', [BookRentUserController::class, 'accept']);
        
        Route::get('/dataLaporan', [BookRentController::class, 'index'])->name('Data Laporan');
        Route::put('/updateDataLaporan/{id}', [BookRentController::class, 'update']);
        Route::get('/hapusDataLaporan/{id}', [BookRentController::class, 'destroy']);

        Route::get('/ekspor', [RentLogController::class, 'export']);
        
        Route::get('/kepsek', function () {
            return view('kepsek.daftarLaporan', [
                "title" => "Laporan",
                "subJudul" => "Daftar Laporan",
                "subJudul2" => "",
                "subJudul3" => "",
            ]);
        });
        
        Route::get('/perpustakaan', function () {
            return view('kepsek.perpustakaan', [
                "title" => "Perpustakaan",
                "subJudul" => "Buku",
                "subJudul2" => "",
                "subJudul3" => "",
            ]);
        });
        });
});
