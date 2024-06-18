<?php

namespace App\Http\Controllers;
use App\Models\Bahan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;

class BahanController extends Controller
{
    public function index(){
        return view('bahans', [
            'bahans' => Bahan::latest()->get()
        ]);
    }

    public function type(Bahan $bahan){
        return view('bahan',[
            'title' => $bahan->nama_bahan,
            'ornamens' => $bahan->ornamens->load('bahan')
        ]);
    }

    public function admBahan(){
        return view('pages.admin-bahan', [
            'admin_bahan' => Bahan::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_bahan' => 'required|max:255',
            'jenis_bahan' => 'required|max:255',
            'deskripsi_bahan' => 'required',
            'foto_bahan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menghasilkan slug dari nama bahan
        $slug = Str::slug($validatedData['nama_bahan']);

        // Menambahkan slug ke data yang divalidasi
        $validatedData['slug'] = $slug;

        if ($request->hasFile('foto_bahan')) {
            $image = $request->file('foto_bahan');
            $filename = time() . '_' . Str::random(10); // Menyimpan nama file secara acak
            $encryptedFileName = Crypt::encrypt($filename);
            $image->storeAs('public/storage', $encryptedFileName);
            $validatedData['foto_bahan'] = $encryptedFileName;
        }

        Bahan::create($validatedData);

        return redirect()->route('bahan')->with('success', 'Data bahan berhasil ditambah');
    }

    public function update(Request $request, $slug)
    {
        // Cari bahan berdasarkan slug
        $bahan = Bahan::where('slug', $slug)->firstOrFail();

        // Validasi data
        $validatedData = $request->validate([
            'nama_bahan' => 'required|max:255',
            'jenis_bahan' => 'required|max:255',
            'deskripsi_bahan' => 'required',
            'foto_bahan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menghasilkan slug baru dari nama bahan jika berubah
        $newSlug = Str::slug($validatedData['nama_bahan']);
        $validatedData['slug'] = $newSlug;

        // Mengolah foto bahan jika ada file baru yang diunggah
        if ($request->hasFile('foto_bahan')) {
            // Hapus file foto lama jika ada
            if ($bahan->foto_bahan) {
                Storage::delete('public/storage/' . $bahan->foto_bahan);
            }

            $image = $request->file('foto_bahan');
            $filename = time() . '_' . Str::random(10); // Menyimpan nama file secara acak
            $encryptedFileName = Crypt::encrypt($filename);
            $image->storeAs('public/storage', $encryptedFileName);
            $validatedData['foto_bahan'] = $encryptedFileName;
        } else {
            // Jika tidak ada file baru, tetap gunakan foto lama
            $validatedData['foto_bahan'] = $bahan->foto_bahan;
        }

        // Update data bahan
        $bahan->update($validatedData);

        return redirect()->route('bahan')->with('success', 'Data bahan berhasil diperbarui');
    }

    public function destroy($slug)
    {
        // Cari bahan berdasarkan slug
        $bahan = Bahan::where('slug', $slug)->firstOrFail();

        // Hapus file foto bahan dari penyimpanan
        if ($bahan->foto_bahan) {
            Storage::delete('public/storage/' . $bahan->foto_bahan);
        }

        // Hapus data bahan dari database
        $bahan->delete();

        return redirect()->route('bahan')->with('success', 'Data bahan berhasil dihapus');
    }
}
