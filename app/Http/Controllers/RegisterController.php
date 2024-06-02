<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|max:255|min:5',
            'username' => 'required|min:4|max:255|unique:users',
            'password' => 'required|min:8|max:255'
        ]);
    }
}
