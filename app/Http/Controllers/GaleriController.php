<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all(); // Mengambil semua data user
        return view('pages.admin-galeri', [
            'admin_galeri' => Galeri::latest()->get()
        ]);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'judul' => 'required|max:50',
            'deskripsi_galeri' => 'required',
            'foto_galeri' => 'image|file|max:10240'
        ]);

        $randomString = Str::random(6); 
        $validateData['slug'] = $randomString;
        
        if ($request->file('foto_galeri')) {
            $validateData['foto_galeri'] = $request->file('foto_galeri')->store('galeri-images');
        }


        Galeri::create($validateData);

        return redirect('/galeri')->with('success', 'Galeri berhasil ditambah');
    }

    public function update(Request $request, Galeri $galeri){
        $validateData = $request->validate([
            'judul' => 'required|max:50',
            'deskripsi_galeri' => 'required',
            'foto_galeri' => 'image|file|max:10240'
        ]);

        if($request->file('foto_galeri')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['foto_galeri'] = $request->file('foto_galeri')->store('galeri-images');
        }

        Galeri::where('slug', $galeri->slug)
        ->update($validateData);

        return redirect('/galeri')->with('success', 'Galeri berhasil diubah');
    }

    public function destroy(Galeri $galeri){
        if($galeri->foto_galeri){
            Storage::delete($galeri->foto_galeri);
        }
        Galeri::destroy($galeri->id);

        return redirect('/galeri')->with('success', 'Galeri berhasil dihapus!');
    }
}
