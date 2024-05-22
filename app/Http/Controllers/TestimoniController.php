<?php

namespace App\Http\Controllers;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index() {
        return view('testimonis', [
            "testimonis" => Testimoni::all()
        ]);
    }

    public function show(Testimoni $testimoni) {
        return view('testimoni', [
            "testimoni" => $testimoni
        ]);
    }
}
