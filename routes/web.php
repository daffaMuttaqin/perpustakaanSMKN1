<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

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

Route::get('/', [PublicController::class, 'index'])->name('login');

Route::middleware(['guest'])->group(function () {
    Route::get('/masuk', [AuthController::class, 'login']);
    Route::post('/masuk', [AuthController::class, 'authenticating']);
    Route::get('/daftar', [AuthController::class, 'register'])->name('Daftar');
    Route::post('/daftar', [AuthController::class, 'store']);
});

Route::middleware(['preventBackHistory', 'auth'])->group(function () {

    Route::get('/keluar', [AuthController::class, 'logout']);

    Route::get('/listBuku', [StudentController::class, 'index'])->name('Data Siswa');
    Route::get('/riwayat', function () {
        return view('public/riwayat', [
            "title" => "Data Siswa"
        ]);
    })->name('Data Siswa');
    
    Route::get('/profil', function () {
        return view('public/profil', [
            "title" => "Profil"
        ]);
    })->name('Profil');

    Route::middleware(['onlyAdmin'])->group(function () {

        Route::get('/dataBuku', [BookController::class, 'index'])->name('Data Buku');
        Route::post('/tambahBuku', [BookController::class, 'store']);
        Route::put('/updateBuku/{id}', [BookController::class, 'update']);
        Route::get('/hapusBuku/{id}', [BookController::class, 'destroy']);

        Route::get('/dataPeminjaman', function () {
        return view('admin/dataPeminjaman', [
            "title" => "Data Buku",
            "subJudul" => "Data Buku",
            "subJudul2" => "Data Peminjaman",
            "subJudul3" => "",
        ]);
        })->name('Data Peminjaman');
    
        Route::get('/dataAnggota', [UserController::class, 'indexStudent'])->name('Data Anggota Perpustakaan');
        Route::post('/tambahAnggota', [UserController::class, 'storeStudent']);
        Route::put('/updateAnggota/{id}', [UserController::class, 'updateStudent']);
        Route::get('/hapusAnggota/{id}', [UserController::class, 'destroyStudent']);

        Route::get('/dataPekerja', [UserController::class, 'indexAdmin'])->name('Data Pekerja Perpustakaan');
        Route::post('/tambahPekerja', [UserController::class, 'storeAdmin']);
        Route::put('/updatePekerja/{id}', [UserController::class, 'updateAdmin']);
        Route::get('/hapusPekerja/{id}', [UserController::class, 'destroyAdmin']);
        
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
                "subJudul2" => "",
                "subJudul3" => "",
            ]);
        })->name('Data Laporan');
        
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
        });
});
