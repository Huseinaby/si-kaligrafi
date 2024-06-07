<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all(); // Mengambil semua data user
        return view('pages.admin-galeri', [
            'admin_galeri' => Galeri::latest()->get()
        ]);
    }
}
