<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('rumah', [
        "title" => "Rumah"
    ]);
});

Route::get('/masuk', function () {
    return view('login', [
        "title" => "Masuk"
    ]);
});

Route::get('/dataBuku', function () {
    return view('admin/dataBuku', [
        "title" => "Data Buku",
        "subJudul" => "Data Buku",
        "subJudul2" => "Data Peminjaman",
        "subJudul3" => "",
    ]);
});

Route::get('/dataPeminjaman', function () {
    return view('admin/dataPeminjaman', [
        "title" => "Data Buku",
        "subJudul" => "Data Buku",
        "subJudul2" => "Data Peminjaman",
        "subJudul3" => "",
    ]);
});

Route::get('/dataAnggota', function () {
    return view('admin/dataAnggota', [
        "title" => "Data Anggota",
        "subJudul" => "Data Anggota Perpustakaan",
        "subJudul2" => "",
        "subJudul3" => "",
    ]);
});

Route::get('/dataPekerja', function () {
    return view('admin/dataPekerja', [
        "title" => "Data pekerja",
        "subJudul" => "Data Pekerja Perpustakaan",
        "subJudul2" => "",
        "subJudul3" => "",
    ]);
});

Route::get('/transaksi', function () {
    return view('admin/transaksi', [
        "title" => "Transaksi",
        "subJudul" => "Transaksi Buku",
        "subJudul2" => "",
        "subJudul3" => "",
    ]);
});

Route::get('/dataLaporan', function () {
    return view('admin/dataLaporan', [
        "title" => "Laporan",
        "subJudul" => "Data Laporan",
        "subJudul2" => "Bukti Setoran",
        "subJudul3" => "Upload Laporan",
    ]);
});

Route::get('/buktiSetoran', function () {
    return view('admin/buktiSetoran', [
        "title" => "Laporan",
        "subJudul" => "Data Laporan",
        "subJudul2" => "Bukti Setoran",
        "subJudul3" => "Upload Laporan",
    ]);
});

Route::get('/uploadLaporan', function () {
    return view('admin/uploadLaporan', [
        "title" => "Laporan",
        "subJudul" => "Data Laporan",
        "subJudul2" => "Bukti Setoran",
        "subJudul3" => "Upload Laporan",
    ]);
});
