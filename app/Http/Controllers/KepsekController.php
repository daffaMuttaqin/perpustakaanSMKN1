<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepsekController extends Controller
{
    public function index()
    {
        return view('kepsek.daftarLaporan', [
            "title" => "Laporan",
            "subJudul" => "",
            "subJudul2" => "",
            "subJudul3" => "",
        ]);
    }

    public function book()
    {
        return view('kepsek.perpustakaan', [
            "title" => "Perpustakaan",
            "subJudul" => "Buku",
            "subJudul2" => "",
            "subJudul3" => "",
        ]);
    }
}
