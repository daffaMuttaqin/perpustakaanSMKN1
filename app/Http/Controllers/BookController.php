<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
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

        $notif = Notification::all();

        return view('admin.dataBuku', [
            "title" => "Data Buku",
            "subJudul" => "Data Buku",
            "subJudul2" => "Data Peminjaman",
            "subJudul3" => "", 'books' => $books, 'notif' => $notif
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->file('cover')) {
            $extension = $request->file('cover')->getClientOriginalExtension();
            $newName = $request->title . '-' . now()->timestamp . '.' . $extension;
            $path = $request->file('cover')->storeAs('public/cover-book', $newName);
        }

        $book = Book::latest()->first();
        $slug = "BUKU";

        if ($book == null) {
            $number = "0001";
        } else {

            $explode = explode("-", $book->codeBook);
            $number = intval($explode[1]) + 1;
            $number = str_pad($number, 4, "0", STR_PAD_LEFT);
        }

        $codeBook = $slug . '-' . $number;

        $data['codeBook'] = $codeBook;

        $data['cover'] = basename($path);
        Book::create($data);

        Session::flash('status', 'success');
        Session::flash('message', 'Buku Berhasil ditambahkan');

        return redirect('/dataBuku');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = $request->all();

        if ($request->hasFile('cover')) {

            $extension = $request->file('cover')->getClientOriginalExtension();
            $newName = $request->title . '-' . now()->timestamp . '.' . $extension;
            $path = $request->file('cover')->storeAs('public/cover-book', $newName);

            $oldCover = Book::where('id', $id)->first()->cover;
            $deleteOldCover = Storage::delete('public/cover-book/' . $oldCover);

            $data['cover'] = basename($path);
        }

        $book = Book::find($id);

        $book->update($data);

        Session::flash('status', 'update');
        Session::flash('message', 'Buku Berhasil diupdate');

        return redirect('/dataBuku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($book)
    {
        $imageName = Book::find($book);

        Storage::delete('public/cover-book/' . basename($imageName->cover));

        Book::where('id', $book)->delete();

        Session::flash('status', 'delete');
        Session::flash('message', 'Buku Berhasil dihapus');

        return redirect('/dataBuku');
    }
}
