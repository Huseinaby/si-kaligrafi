<?php

namespace App\Http\Controllers;
use App\Models\Ornamen;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use App\Models\Bahan;

class OrnamenController extends Controller
{
    public function index(){
        return view('ornamens',[
            'ornamens' => Ornamen::latest()->get()
        ]);
    }

    public function show(Ornamen $ornamen){
        return view('ornamen', [
            'ornamen' => $ornamen
        ]);
    }

    public function admOrnamen() {
        return view('pages.admin-ornamen', [
            'admin_ornamen' => Ornamen::latest()->get(),
            'bahan_list' => Bahan::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_ornamen' => 'required|max:255',
            'bahan_id' => 'required|integer',
            'deskripsi_ornamen' => 'required',
            'jenis_ornamen' => 'required|max:255',
            'foto_ornamen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori' => 'required|max:255',
        ]);

        // Menghasilkan slug dari nama ornamen
        $slug = Str::slug($validatedData['nama_ornamen']);

        // Menambahkan slug ke data yang divalidasi
        $validatedData['slug'] = $slug;

        if ($request->hasFile('foto_ornamen')) {
            $image = $request->file('foto_ornamen');
            $filename = time() . '_' . Str::random(10); // Menyimpan nama file secara acak
            $encryptedFileName = Crypt::encrypt($filename);
            $image->storeAs('public/storage', $encryptedFileName);
            $validatedData['foto_ornamen'] = $encryptedFileName;
        }

        Ornamen::create($validatedData);

        return redirect()->route('ornamen')->with('success', 'Data ornamen berhasil ditambah');
    }

    public function update(Request $request, $slug)
    {
        // Cari bahan berdasarkan slug
        $ornamen = Ornamen::where('slug', $slug)->firstOrFail();

        // Validasi data
        $validatedData = $request->validate([
            'nama_ornamen' => 'required|max:255',
            'bahan_id' => 'required|max:255',
            'deskripsi_ornamen' => 'required',
            'jenis_ornamen' => 'required|max:255',
            'foto_ornamen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori' => 'required|max:255',
        ]);

        // Menghasilkan slug baru dari nama bahan jika berubah
        $newSlug = Str::slug($validatedData['nama_ornamen']);
        $validatedData['slug'] = $newSlug;

        // Mengolah foto ornamen jika ada file baru yang diunggah
        if ($request->hasFile('foto_ornamen')) {
            // Hapus file foto lama jika ada
            if ($ornamen->foto_ornamen) {
                Storage::delete('public/storage/' . $ornamen->foto_ornamen);
            }

            $image = $request->file('foto_ornamen');
            $filename = time() . '_' . Str::random(10); // Menyimpan nama file secara acak
            $encryptedFileName = Crypt::encrypt($filename);
            $image->storeAs('public/storage', $encryptedFileName);
            $validatedData['foto_ornamen'] = $encryptedFileName;
        } else {
            // Jika tidak ada file baru, tetap gunakan foto lama
            $validatedData['foto_ornamen'] = $ornamen->foto_ornamen;
        }

        // Update data bahan
        $ornamen->update($validatedData);

        return redirect()->route('ornamen')->with('success', 'Data ornamen berhasil diperbarui');
    }

    public function destroy($slug)
    {
        // Cari bahan berdasarkan slug
        $ornamen = Ornamen::where('slug', $slug)->firstOrFail();

        // Hapus file foto ornamen dari penyimpanan
        if ($ornamen->foto_ornamen) {
            Storage::delete('public/storage/' . $ornamen->foto_ornamen);
        }

        // Hapus data ornamen dari database
        $ornamen->delete();

        return redirect()->route('ornamen')->with('success', 'Data ornamen berhasil dihapus');
    }
}
