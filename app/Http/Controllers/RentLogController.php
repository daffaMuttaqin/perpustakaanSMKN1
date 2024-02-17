<?php

namespace App\Http\Controllers;

use App\Models\RentLogs;
use Illuminate\Http\Request;
use App\Exports\ReportExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

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

    public function export()
    {
        $date = $now = Carbon::now()->format('d-m-Y');
        return Excel::download(new ReportExport, 'Data_Peminjaman_Siswa_' . $date . '.xlsx');
    }

}