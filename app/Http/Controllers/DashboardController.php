<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        $testimonis = Testimoni::where('id_user', $user->id_user)->latest()->get();
        
        return view('dashboard', [
            "testimonis" => $testimonis,
            "karyas" => $user->karya
        ]);
    }

    public function admDash(){
        return view('pages.admin-dashboard');
    }
}
