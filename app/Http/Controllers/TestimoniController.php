<?php

namespace App\Http\Controllers;
use App\Models\Testimoni;
use App\Models\User;
use App\Models\Karya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon; 

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

    public function isiTest(Karya $karya){
        return view('isi_testimoni_new',[
            'user' => Auth::user(),
            'karya' => $karya
        ]);
    }

    public function store(Request $request, Karya $karya){
        $credential = $request->validate([
            'isi_testimoni' => 'required'
        ]);

        $credential['slug'] = Str::slug(Auth()->user()->nama_lengkap, '-');
        $credential['id_user'] = Auth()->id();
        $credential['karya_id'] = $karya->id;
        $credential['tgl_testimoni'] = now();

        Testimoni::create($credential);

        return redirect('/user/dashboard')->with('success', 'Testimoni sedang ditinjau');
    }

    public function edit(Testimoni $testimoni){
        return view('edit_testimoni', [
            'user' => Auth::user(),
            'testimoni' => $testimoni
        ]);
    }

    public function update(Request $request, Testimoni $testimoni){

        $testimon = Testimoni::where('id', $testimoni->id);

        $credential = $request->validate([
            'isi_testimoni' => 'required'
        ]);

        $credential['slug'] = Str::slug(Auth()->user()->nama_lengkap, '-');
        $credential['id_user'] = Auth()->id();
        $credential['karya_id'] = $testimoni->karya->id;
        $credential['tgl_testimoni'] = now();

        $testimon->update($credential);

        return redirect('/user/dashboard')->with('success', 'Testimoni tersimpan');
    }

    public function destroy(Testimoni $testimoni){
        $testimoni->delete();

        return redirect('/user/dashboard')->with('success', 'Testimoni Berhasil dihapus');
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
