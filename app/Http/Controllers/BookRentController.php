<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\RentLogs;
use Illuminate\Http\Request;

class BookRentController extends Controller
{
    public function index(Request $request)
    {
        $title = $request->title;

        if ($title) {
            $rents = RentLogs::with(['user', 'book'])->whereHas('user', function($query) use ($title) {
                $query->where('username', 'like', '%' . $title . '%');
            })->where('status', '=', 'Menunggu')->get();
        }
        else {
            $rents = RentLogs::with(['user', 'book'])->where('status', '=', 'Menunggu')->get();
        }

        return view('admin.transaksi', [
            "title" => "Transaksi",
            "subJudul" => "Transaksi Buku",
            "subJudul2" => "",
            "subJudul3" => "", 'rents' => $rents
        ]);
    }

    public function decline($id)
    {
        $status = 'Ditolak';

        RentLogs::find($id)->update(['status' => $status]);

        return redirect('/transaksi');
    }

    public function accept(Request $request, $id)
    {
        $status = 'Masih Dipinjam';

        RentLogs::find($id)->update(['status' => $status, 'returnDate' => $request->returnDate]);

        return redirect('/transaksi');
    }

    public function report(Request $request)
    {
        $title = $request->title;

        if ($title) {
            $rents = RentLogs::with('user')->whereHas('user', function($query) use ($title) {
                $query->where('username', 'like', '%' . $title . '%');
            })->where('status', '!=', 'Menunggu')->where('status', '!=', 'Ditolak')->get();
        }
        else {
            $rents = RentLogs::with('user')->where('status', '!=', 'Menunggu')->where('status', '!=', 'Ditolak')->get();
        }

        return view('admin.dataLaporan', [
            "title" => "Laporan",
            "subJudul" => "Data Laporan",
            "subJudul2" => "",
            "subJudul3" => "", 'rents' => $rents
        ]);
    }

    public function update(Request $request, $id)
    {
        $status = $request->status;

        RentLogs::find($id)->update(['status' => $status, 'actualReturnDate' => Carbon::now()->toDateTimeString()]);

        return redirect('/transaksi');
    }

    public function destroy($id)
    {
        RentLogs::where('id', $id)->delete();

        return redirect('/transaksi');
    }
}
