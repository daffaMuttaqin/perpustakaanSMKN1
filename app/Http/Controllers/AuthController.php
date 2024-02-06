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

        }
        
        return redirect('/masuk');
        
    }

    public function logout(){
        Auth::logout();
        return redirect('/masuk');

    }
}
