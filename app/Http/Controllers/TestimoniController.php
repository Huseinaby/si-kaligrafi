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

    public function admReqTesti() {
        $users = User::all(); // Mengambil semua data user
        $karyas = Karya::all(); // Mengambil semua data karya

        return view('pages.admin-request-testimoni', [
            'users' => $users,
            'karyas' => $karyas,
            'admin_req_testimoni' => Testimoni::latest()->get(),
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

    public function userTesti(User $user) {
        return view('testimoni', [
            "testimoni" => $user->testimonis
        ]);
    }

    public function adminStore(Request $request)
    {
        //dd($request->all());

        $validatedData = $request->validate([
            'id_user' => 'required|exists:users,id_user',
            'nama_panitia' => 'required|max:255',
            'karya_id' => 'required|exists:karyas,id',
            'isi_testimoni' => 'required',
            'status' => 'required|in:pending,accepted,rejected'
        ]);

        // Menghasilkan slug dari nama panitia
        $slug = Str::slug($validatedData['nama_panitia']);

        // Menambahkan slug ke data yang divalidasi
        $validatedData['slug'] = $slug;
        $validatedData['tgl_testimoni'] = now();

        Testimoni::create($validatedData);

        return redirect()->route('req-testimonies')->with('success', 'Data testimoni berhasil ditambah');
    }

    public function accept_status($id) {
        $testimoni = Testimoni::findOrFail($id);

        $testimoni -> status = 'accepted';

        $testimoni -> save();

        return redirect()->back()->with('success', 'Status testimoni berhasil diperbarui');
    }

    public function reject_status($id) {
        $testimoni = Testimoni::findOrFail($id);

        $testimoni -> status = 'rejected';

        $testimoni -> save();

        return redirect()->back()->with('success', 'Status testimoni berhasil diperbarui');
    }
}
