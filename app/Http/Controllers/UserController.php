<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function indexStudent(Request $request)
    {

        if ($request->title) {
            $users = User::where('username', 'like', '%' . $request->title . '%')->where('role', '=', 'Student')->paginate(7)->withQueryString();
        } else {
            $users = User::where('role', '=', 'Student')->paginate(7)->withQueryString();
        }

        $notif = Notification::all();

        return view('admin.dataAnggota', [
            "title" => "Data Anggota",
            "subJudul" => "Data Anggota Perpustakaan",
            "subJudul2" => "",
            "subJudul3" => "", 'users' => $users, 'notif' => $notif
        ]);
    }

    public function storeStudent(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);

        $data = $request->all();

        $data['password'] = Hash::make($data['password']);

        $data['nip'] = "";
        $data['role'] = "Student";
        $data['avatar'] = "";

        User::create($data);

        Session::flash('status', 'success');
        Session::flash('message', 'Anggota Berhasil ditambahkan');

        return redirect('/dataAnggota');
    }

    public function updateStudent(Request $request, $id)
    {
        $data = $request->all();

        if ($request->password != null) {
            $validated = $request->validate([
                'password' => 'required|confirmed|min:8',
            ]);

            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $request->oldPassword;
        }

        $data['nip'] = "";
        $data['role'] = "Student";
        $data['avatar'] = "";

        $users = User::find($id);

        $users->update($data);

        Session::flash('status', 'update');
        Session::flash('message', 'Anggota Berhasil diupdate');

        return redirect('/dataAnggota');
    }

    public function destroyStudent($user)
    {
        User::where('id', $user)->delete();

        Session::flash('status', 'delete');
        Session::flash('message', 'Anggota Berhasil dihapus');

        return redirect('/dataAnggota');
    }

    public function indexAdmin(Request $request)
    {

        if ($request->title) {
            $users = User::where('username', 'like', '%' . $request->title . '%')->where('role', '!=', 'Student')->paginate(7)->withQueryString();
        } else {
            $users = User::where('role', '!=', 'Student')->paginate(7)->withQueryString();
        }

        $notif = Notification::all();

        return view('admin.dataPekerja', [
            "title" => "Data pekerja",
            "subJudul" => "Data Pekerja Perpustakaan",
            "subJudul2" => "",
            "subJudul3" => "", 'users' => $users, 'notif' => $notif
        ]);
    }

    public function storeAdmin(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);

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

        Session::flash('status', 'success');
        Session::flash('message', 'Pekerja Berhasil ditambahkan');

        return redirect('/dataPekerja');
    }

    public function updateAdmin(Request $request, $id)
    {
        $data = $request->all();

        if ($request->password != null) {
            $validated = $request->validate([
                'password' => 'required|confirmed|min:8',
            ]);

            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $request->oldPassword;
        }

        if ($request->hasFile('avatar')) {

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

        Session::flash('status', 'update');
        Session::flash('message', 'Pekerja Berhasil diupdate');

        return redirect('/dataPekerja');
    }

    public function destroyAdmin($user)
    {
        User::where('id', $user)->delete();

        Session::flash('status', 'delete');
        Session::flash('message', 'Pekerja Berhasil dihapus');

        return redirect('/dataPekerja');
    }
}
