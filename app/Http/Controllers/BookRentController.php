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
        $date = Carbon::now()->toDateTimeString();

        RentLogs::find($id)->update(['status' => $status, 'actualReturnDate' => $date]);

        return redirect('/dataLaporan');
    }

    public function destroy($id)
    {
        RentLogs::where('id', $id)->delete();

        return redirect('/dataLaporan');
    }
}
