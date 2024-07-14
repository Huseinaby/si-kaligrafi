<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.admin-user', [
            "admin_user" => $users = User::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:4|max:255|unique:users',
            'nama_lengkap' => 'required|max:255',
            'password' => 'required|min:8|max:255',
            'level' => 'required|in:1,2'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('user')->with('success', 'Data user berhasil ditambah');
    }

    public function update(Request $request, $id_user) 
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'password' => 'nullable|min:8|max:255',
            'level' => 'required|in:1,2'
        ]);

        $user = User::where('id_user', $id_user)->firstOrFail();
        $user->nama_lengkap = $validatedData['nama_lengkap'];
        if ($request->filled('password')) {
            $user->password = bcrypt($validatedData['password']);
        }
        $user->level = $validatedData['level'];
        $user->save();
        return redirect()->route('user')->with('success', 'Data user berhasil diperbarui');
    }

    public function userUpdate(Request $request, $id_user) 
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'password' => 'nullable|min:8|max:255',
        ]);

        $user = User::where('id_user', $id_user)->firstOrFail();
        $user->nama_lengkap = $validatedData['nama_lengkap'];
        if ($request->filled('password')) {
            $user->password = bcrypt($validatedData['password']);
        }

        $user->save();

        return redirect()->route('u-dashboard')->with('success', 'Data Anda Berhasil Diperbarui');
    }

    public function destroy($id_user)
    {
        $user = User::where('id_user', $id_user)->firstOrFail();
        $user->delete();

        return redirect()->route('user')->with('success', 'User berhasil dihapus');
    }
    
}
