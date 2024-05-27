<?php

namespace App\Http\Controllers;
use App\Models\Ornamen;
use Illuminate\Http\Request;

class OrnamenController extends Controller
{
    public function index(){
        return view('ornamens',[
            'ornamens' => Ornamen::with('bahan')->latest()->get()
        ]);
    }

    public function show(Ornamen $ornamen){
        return view('ornamen', [
            'ornamen' => $ornamen
        ]);
    }
}
