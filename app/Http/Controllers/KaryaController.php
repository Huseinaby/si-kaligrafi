<?php

namespace App\Http\Controllers;
use App\Models\Karya;
use App\Models\User;
use Illuminate\Http\Request;

class KaryaController extends Controller
{
    public function index(){
        return view('portofolio', [
            'portofolios' => Karya::latest()->paginate(6)
        ]);
    }

    public function admKarya(){
        return view('pages.admin-karya', [
            'admin_karya' => Karya::latest()->paginate(6)
        ]);
    }

    public function userKarya(User $user){
        return view('testimonis', [
            'karyas' => $user->karya
        ]);
    }
}
