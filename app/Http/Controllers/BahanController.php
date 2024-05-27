<?php

namespace App\Http\Controllers;
use App\Models\Bahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    public function index(){
        return view('bahans', [
            'bahans' => Bahan::with('bahan')->latest()->get()
        ]);
    }

    public function type(Bahan $bahan){
        return view('bahan',[
            'title' => $bahan->nama_bahan,
            'ornamens' => $bahan->ornamens->load('bahan')
        ]);
    }
}
