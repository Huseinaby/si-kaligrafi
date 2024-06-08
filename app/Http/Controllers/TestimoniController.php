<?php

namespace App\Http\Controllers;
use App\Models\Testimoni;
use App\Models\User;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index() {
        return view('testimonis', [
            "testimonis" => Testimoni::latest()->get()
        ]);
    }

    public function admTesti(){
        return view('pages.admin-testimoni');
    }

    public function userTesti(User $user) {
        return view('testimoni', [
            "testimoni" => $user->testimonis
        ]);
    }
}
