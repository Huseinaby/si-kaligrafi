<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
{
    public function admLayanan(){
        return view('pages.admin-layanan', [
            'admin_layanan' => Layanan::latest()->paginate(6)
        ]);
    }
}
