<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function indexStudent(Request $request){

        if ($request->title) {
            $users = User::where('username', 'like', '%' . $request->title . '%')->where('role', '=', 'Student')->get();
        }
        else {
            $users = User::where('role', '=', 'Student')->get();
        }

        return view('admin.dataAnggota', [
            "title" => "Data Anggota",
            "subJudul" => "Data Anggota Perpustakaan",
            "subJudul2" => "",
            "subJudul3" => "", 'users' => $users
        ]);
    }

    public function storeStudent(Request $request){
        $data = $request->all();

        $data['password'] = Hash::make($data['password']);

        $data['nip'] = "";
        $data['role'] = "Student";
        $data['avatar'] = "";
        
        User::create($data);

        return redirect('/dataAnggota');
    }

    public function updateStudent(Request $request, $id)
    {
        $data = $request->all();

        if ( $request->password != null ) {
            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $request->oldPassword;
        }

        $data['nip'] = "";
        $data['role'] = "Student";
        $data['avatar'] = "";

        $users = User::find($id);

        $users->update($data);

        return redirect('/dataAnggota');

    }

    public function destroyStudent($user)
    {   
        User::where('id', $user)->delete();

        return redirect('/dataAnggota');
    }

    public function indexAdmin(Request $request){

        if ($request->title) {
            $users = User::where('username', 'like', '%' . $request->title . '%')->where('role', '!=', 'Student')->get();
        }
        else {
            $users = User::where('role', '!=', 'Student')->get();
        }

        return view('admin.dataPekerja', [
            "title" => "Data pekerja",
            "subJudul" => "Data Pekerja Perpustakaan",
            "subJudul2" => "",
            "subJudul3" => "", 'users' => $users
        ]);
    }

    public function storeAdmin(Request $request){
        $data = $request->all();

        if ($request->file('avatar')) {
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $newName = $request->username . '-' . now()->timestamp . '.' . $extension;
            $path = $request->file('avatar')->storeAs('public/avatar', $newName);
        }

        $data['password'] = Hash::make($data['password']);

        $data['jurusan'] = "";
        $data['avatar'] = basename($path);
        
        User::create($data);

        return redirect('/dataPekerja');
    }

    public function updateAdmin(Request $request, $id)
    {
        $data = $request->all();

        if ( $request->password != null ) {
            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $request->oldPassword;
        }

        if ($request->hasFile('avatar')){

            $extension = $request->file('avatar')->getClientOriginalExtension();
            $newName = $request->username . '-' . now()->timestamp . '.' . $extension;
            $path = $request->file('avatar')->storeAs('public/avatar', $newName);

            $oldavatar = User::where('id', $id)->first()->avatar;
            $deleteOldavatar = Storage::delete('public/avatar/' . $oldavatar);

            $data['avatar'] = basename($path);
        }

        $data['jurusan'] = "";

        $users = User::find($id);

        $users->update($data);

        return redirect('/dataPekerja');

    }

    public function destroyAdmin($user)
    {   
        User::where('id', $user)->delete();

        return redirect('/dataPekerja');
    }
}
