<?php

namespace App\Http\Controllers;

use App\Models\RentLogs;
use Illuminate\Http\Request;

class RentLogController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', 1)->where('status', '=', 'active')->get();
        $books = Book::all();
        
        if ($request->title) {
            $rents = RentLogs::where('userId', 'like', '%' . $request->title . '%')->get();
        }
        else {
            $rents = RentLogs::with(['user', 'book']);
        }

        return view('admin.transaksi', [
            "title" => "Transaksi",
            "subJudul" => "Transaksi Buku",
            "subJudul2" => "",
            "subJudul3" => "", 'rents' => $rents
        ]);
    }

}