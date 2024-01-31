<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index () {

        return view ('admin.dataBuku', [
            "title" => "Data Buku", 
            "subJudul" => "Data Buku", 
            "subJudul2" => "Data Peminjaman", 
            "subJudul3" => "",]);

    }
}
