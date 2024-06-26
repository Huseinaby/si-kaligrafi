<?php

namespace App\Http\Controllers;
use App\Models\Karya;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use App\Models\Ornamen;

class KaryaController extends Controller
{
    public function index(){
        return view('portofolio', [
            'portofolios' => Karya::latest()->paginate(6)
        ]);
    }

    public function admKarya(){
        return view('pages.admin-karya', [
            'admin_karya' => Karya::latest()->paginate(6),
            'ornamen_list' => Ornamen::all()
        ]);
    }

    public function admPesanan(){
        return view('');
    }

    public function userKarya(){
        $user = Auth::user();
        return view('testimonis', [
            'karyas' => $user->karya
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_karya' => 'required|max:255',
            'nama_masjid' => 'required|max:255',
            'lokasi' => 'required',
            'jenis_karya' => 'required|max:255',
            'deskripsi_karya' => 'required',
            'ornamen_id' => 'required|integer',
            'foto_karya' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'tgl_pembuatan' => 'required|date',
        ]);

        // Menghasilkan slug dari nama ornamen
        $slug = Str::slug($validatedData['nama_karya']);

        // Menambahkan slug ke data yang divalidasi
        $validatedData['slug'] = $slug;

        if ($request->hasFile('foto_karya')) {
            $image = $request->file('foto_karya');
            $uniquestring = "foto_karya";
            $filename = time() . '_' . $uniquestring . '_' . Str::random(10);
            $image->storeAs('public/storage', $filename);
            $validatedData['foto_karya'] = $filename;
        }

        Karya::create($validatedData);

        return redirect()->route('karya')->with('success', 'Data karya berhasil ditambah');
    }

    public function update(Request $request, $slug)
    {
        // Cari bahan berdasarkan slug
        $karya = Karya::where('slug', $slug)->firstOrFail();

        // Validasi data
        $validatedData = $request->validate([
            'nama_karya' => 'required|max:255',
            'nama_masjid' => 'required|max:255',
            'lokasi' => 'required',
            'jenis_karya' => 'required|max:255',
            'deskripsi_karya' => 'required',
            'ornamen_id' => 'required|integer',
            'foto_karya' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
            'tgl_pembuatan' => 'required',
        ]);

        

        // Menghasilkan slug baru dari nama bahan jika berubah
        $newSlug = Str::slug($validatedData['nama_karya']);
        $validatedData['slug'] = $newSlug;

        // Mengolah foto ornamen jika ada file baru yang diunggah
        if ($request->hasFile('foto_karya')) {
            // Hapus file foto lama jika ada
            if ($karya->foto_karya) {
                Storage::delete('public/storage/' . $karya->foto_karya);
            }

            $image = $request->file('foto_karya');
            $uniquestring = "foto_karya";
            $filename = time() . '_' . $uniquestring . '_' . Str::random(10);
            $image->storeAs('public/storage', $filename);
            $validatedData['foto_karya'] = $filename;
        } else {
            // Jika tidak ada file baru, tetap gunakan foto lama
            $validatedData['foto_karya'] = $karya->foto_karya;
        }

        // Update data bahan
        $karya->update($validatedData);

        return redirect()->route('karya')->with('success', 'Data karya berhasil diperbarui');
    }

    public function destroy($slug)
    {
        // Cari bahan berdasarkan slug
        $karya = Karya::where('slug', $slug)->firstOrFail();

        // Hapus file foto ornamen dari penyimpanan
        if ($karya->foto_karya) {
            Storage::delete('public/storage/' . $karya->foto_karya);
        }

        // Hapus data ornamen dari database
        $karya->delete();

        return redirect()->route('karya')->with('success', 'Data ornamen berhasil dihapus');
    }
}
