<?php

namespace App\Http\Controllers;

use App\Models\RentLogs;
use Illuminate\Http\Request;

class RentLogController extends Controller
{
    public function index(Request $request)
    {
        $title = $request->title;

        if ($title) {
            $rents = RentLogs::with(['user', 'book'])->whereHas('user', function($query) use ($title) {
                $query->where('username', 'like', '%' . $title . '%');
            })->get();
        }
        else {
            $rents = RentLogs::with(['user', 'book'])->get();
        }

        return view('admin.dataPeminjaman', [
            "title" => "Data Buku",
            "subJudul" => "Data Buku",
            "subJudul2" => "Data Peminjaman",
            "subJudul3" => "", 'rents' => $rents
        ]);
    }

}