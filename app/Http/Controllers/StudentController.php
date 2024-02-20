<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Book;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->title) {
            $books = Book::where('title', 'like', '%' . $request->title . '%')->paginate(5)->withQueryString();
        } else {
            $books = Book::paginate(5);
        }

        return view('public.listBuku', [
            "title" => "Data Siswa", 'books' => $books
        ]);
    }

    public function history(Request $request)
    {
        $user = Auth::user();

        $title = $request->title;

        if ($title) {
            $rents = RentLogs::with('book')->whereHas('book', function ($query) use ($title) {
                $query->where('title', 'like', '%' . $title . '%');
            })->where('userId', '=', $user->id)->paginate(7)->withQueryString();
        } else {
            $rents = RentLogs::with('book')->where('userId', '=', $user->id)->paginate(7)->withQueryString();
        }

        return view('public.riwayat', [
            "title" => "Data Siswa", 'rents' => $rents
        ]);
    }

    public function profile()
    {
        return view('public.profil', [
            "title" => "Profil"
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
