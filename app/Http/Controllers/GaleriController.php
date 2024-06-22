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
        
        if ($request->hasFile('foto_galeri')) {
            $image = $request->file('foto_galeri');
            $uniquestring = 'foto_galeri';
            $filename = time() . '_' . $uniquestring . '_' . Str::random(10); // Menyimpan nama file secara acak
            $image->storeAs('public/storage', $filename);
            $validateData['foto_galeri'] = $filename;
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

        if ($request->hasFile('foto_layanan')) {
            // Hapus file foto lama jika ada
            if ($galeri->foto_galeri) {
                Storage::delete('public/storage/' . $galeri->foto_galeri);
            }

            $image = $request->file('foto_layanan');
            $uniquestring = 'foto_galeri';
            $filename = time() . '_' . $uniquestring . '_' . Str::random(10); // Menyimpan nama file secara acak
            $image->storeAs('public/storage', $filename);
            $validateData['foto_galeri'] = $filename;
        } else {
            // Jika tidak ada file baru, tetap gunakan foto lama
            $validateData['foto_galeri'] = $galeri->foto_galeri;
        }

        Galeri::where('slug', $galeri->slug)
        ->update($validateData);

        return redirect('/galeri')->with('success', 'Galeri berhasil diperbarui');
    }

    public function destroy(Galeri $galeri){
        if($galeri->foto_galeri){
            Storage::delete('public/storage/' . $galeri->foto_galeri);
        }

        Galeri::destroy($galeri->id);

        return redirect('/galeri')->with('success', 'Galeri berhasil dihapus!');
    }
}
