<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;

class LayananController extends Controller
{
    public function admLayanan(){
        return view('pages.admin-layanan', [
            'admin_layanan' => Layanan::latest()->paginate(6)
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_layanan' => 'required|max:255',
            'foto_layanan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menghasilkan slug dari nama layanan
        $slug = Str::slug($validatedData['nama_layanan']);

        // Menambahkan slug ke data yang divalidasi
        $validatedData['slug'] = $slug;

        if ($request->hasFile('foto_layanan')) {
            $image = $request->file('foto_layanan');
            $filename = time() . '_' . Str::random(10); // Menyimpan nama file secara acak
            $encryptedFileName = Crypt::encrypt($filename);
            $image->storeAs('public/storage', $encryptedFileName);
            $validatedData['foto_layanan'] = $encryptedFileName;
        }

        Layanan::create($validatedData);

        return redirect()->route('layanan')->with('success', 'Data layanan berhasil ditambah');
    }

    public function update(Request $request, $slug)
    {
        // Cari bahan berdasarkan slug
        $layanan = Layanan::where('slug', $slug)->firstOrFail();

        // Validasi data
        $validatedData = $request->validate([
            'nama_layanan' => 'required|max:255',
            'foto_layanan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menghasilkan slug baru dari nama layanan jika berubah
        $newSlug = Str::slug($validatedData['nama_layanan']);
        $validatedData['slug'] = $newSlug;

        // Mengolah foto layanan jika ada file baru yang diunggah
        if ($request->hasFile('foto_layanan')) {
            // Hapus file foto lama jika ada
            if ($layanan->foto_layanan) {
                Storage::delete('public/storage/' . $layanan->foto_layanan);
            }

            $image = $request->file('foto_layanan');
            $filename = time() . '_' . Str::random(10); // Menyimpan nama file secara acak
            $encryptedFileName = Crypt::encrypt($filename);
            $image->storeAs('public/storage', $encryptedFileName);
            $validatedData['foto_bahan'] = $encryptedFileName;
        } else {
            // Jika tidak ada file baru, tetap gunakan foto lama
            $validatedData['foto_bahan'] = $layanan->foto_layanan;
        }

        // Update data bahan
        $layanan->update($validatedData);

        return redirect()->route('layanan')->with('success', 'Data layanan berhasil diperbarui');
    }

    public function destroy($slug)
    {
        // Cari bahan berdasarkan slug
        $layanan = Layanan::where('slug', $slug)->firstOrFail();

        // Hapus file foto layanan dari penyimpanan
        if ($layanan->foto_bahan) {
            Storage::delete('public/storage/' . $layanan->foto_layanan);
        }

        // Hapus data layanan dari database
        $layanan->delete();

        return redirect()->route('layanan')->with('success', 'Data layanan berhasil dihapus');
    }
}
