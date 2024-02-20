<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login () {
        return view ('auth.login', ["title" => "Masuk"]);
    }

    public function register () {
        return view('public.daftar', ["title" => "Daftar"]);
    }

    public function authenticating(Request $request){

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            if (Auth::user()->role == "Admin") {
                return redirect('/dataBuku');
            }
            
            if (Auth::user()->role == "Student") {
                return redirect('/listBuku');
            }

            if (Auth::user()->role == "Kepala Sekolah") {
                return redirect('/perpustakaan');
            }

        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Username atau password salah');
        
        return redirect('/masuk');
        
    }

    public function store(Request $request) {
        $data = $request->all();

        $data['password'] = Hash::make($data['password']);

        $data['nip'] = "";
        $data['role'] = "Student";
        $data['avatar'] = "";
        
        User::create($data);

        return redirect('/masuk');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');

    }
}
