<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(User $user){
        return view('dashboard', [
            "testimonis" => $user->testimonis
        ]);
    }

    public function admDash(){
        return view('pages.admin-dashboard');
    }
}
