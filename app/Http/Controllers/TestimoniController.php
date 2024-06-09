<?php

namespace App\Http\Controllers;
use App\Models\Testimoni;
use App\Models\User;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index() {
        return view('testimonis', [
            "testimonis" => Testimoni::latest()->get()
        ]);
    }

    public function admReqTesti(){
        return view('pages.admin-request-testimoni', [
            "admin_testimoni" => Testimoni::latest()->get()
        ]);
    }

    public function admTesti(){
        return view('pages.admin-testimoni', [
            "admin_testimoni" => Testimoni::latest()->get()
        ]);
    }

    public function updateStatus(Request $request, Testimoni $testimonial)
    {
        $request->validate([
            'status' => 'required|in:accepted,rejected',
        ]);

        $testimonial->status = $request->status;
        $testimonial->save();

        return redirect()->back()->with('success', 'Testimonial status updated successfully!');
    }

    public function userTesti(User $user) {
        return view('testimoni', [
            "testimoni" => $user->testimonis
        ]);
    }
}
