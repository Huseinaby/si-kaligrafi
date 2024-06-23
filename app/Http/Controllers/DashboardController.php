<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use App\Models\Karya;
use App\Models\Layanan;
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
        return view('pages.admin-dashboard', [
            "users" => User::all(),
            "layanans" => Layanan::all(),
            "testimonis" => Testimoni::all(),
            "testimoniPending" => Testimoni::where('status', 'pending')->get(),
            'karyas' => Karya::all(),
            'admin_req_testimoni' => Testimoni::latest()->get(),
        ]);
    }
}
