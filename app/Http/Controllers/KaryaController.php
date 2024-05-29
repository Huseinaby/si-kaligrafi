<?php

namespace App\Http\Controllers;
use App\Models\Karya;
use Illuminate\Http\Request;

class KaryaController extends Controller
{
    public function index(){
        return view('portofolio', [
            'portofolios' => Karya::latest()->get()
        ]);
    }
}
