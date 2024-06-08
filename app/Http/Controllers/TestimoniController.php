<?php

namespace App\Http\Controllers;
use App\Models\Testimoni;
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

    public function show(Testimoni $testimoni) {
        return view('testimoni', [
            "testimoni" => $testimoni
        ]);
    }
}
