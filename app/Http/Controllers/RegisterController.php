<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
       $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'username' => 'required|min:4|max:255|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData['level'] = '2';

        $validatedData['password'] = bcrypt($validatedData['password']);
        
        User::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi Berhasil, Silahkan Login');
    }
}
