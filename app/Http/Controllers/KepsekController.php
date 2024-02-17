<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\RentLogs;
use Illuminate\Http\Request;

class KepsekController extends Controller
{
    public function index(Request $request)
    {
        if ($request->title) {
            $books = Book::where('title', 'like', '%' . $request->title . '%')->get();
        }
        else {
            $books = Book::all();
        }

        return view('kepsek.perpustakaan', [
            "title" => "Perpustakaan",
            "subJudul" => "Buku",
            "subJudul2" => "",
            "subJudul3" => "", 'books' => $books
        ]);
    }

    public function report(Request $request)
    {
        $title = $request->title;

        if ($title) {
            $rents = RentLogs::with(['book','user'])->whereHas('user', function($query) use ($title) {
                $query->where('username', 'like', '%' . $title . '%');
            })->where('status', '!=', 'Menunggu')->where('status', '!=', 'Ditolak')->get();
        }
        else {
            $rents = RentLogs::with(['book','user'])->where('status', '!=', 'Menunggu')->where('status', '!=', 'Ditolak')->get();
        }

        return view('kepsek.daftarLaporan', [
            "title" => "Laporan",
            "subJudul" => "",
            "subJudul2" => "",
            "subJudul3" => "", 'rents' => $rents,
        ]);
    }
}
