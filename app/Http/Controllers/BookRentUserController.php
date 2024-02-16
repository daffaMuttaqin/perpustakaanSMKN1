<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BookRentUserController extends Controller
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
    
    public function store(Request $request)
    {
        $user = Auth::user();

        $logCount = RentLogs::where('userId', $user->id)->whereNull('actualReturnDate')->count();
        $bookCheck  = Book::where('id', $request->bookId)->where('stock', '=', '0')->count();

        if ($bookCheck == 1) {
            
            Session::flash('status', 'fail');
            Session::flash('message', 'Buku tidak tersedia');
            return redirect('/listBuku');
            
        }
        
        if ($logCount >= 3) {
            
            Session::flash('status', 'fail');
            Session::flash('message', 'Sudah mencapai limit pinjam');
            return redirect('/listBuku');

        }

        $rentLogData = [
            'userId' => $user->id,
            'bookId' => $request->bookId,
            'rentDate' => Carbon::now()->toDateTimeString(),
            'status' => 'Menunggu',
            'penalty' => '',
        ];

        try {
            DB::beginTransaction();
            RentLogs::create($rentLogData);

            $book = Book::findOrFail($request->bookId);
                $book->stock = $book->stock - 1;
                $book->save();
            DB::commit();
    
            Session::flash('status', 'success');
            Session::flash('message', 'Buku berhasil dipinjam');
            return redirect('/listBuku');
        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
        }
    }
}
