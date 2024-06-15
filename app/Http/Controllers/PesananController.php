<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Karya;

class PesananController extends Controller
{
    public function admPesanan(){
        return view('pages.admin-pesanan',[
            'karyas' => Karya::all(),
            'users' => User::all()
        ]);
    }

    public function addPesanan(Request $request){
        $validateData = $request->validate([
            'id_user' => 'required',
            'karya_id' => 'required'
        ]);

        $user = User::find($request->id_user);
        $karya_id = $request->karya_id;

        if ($user->karya()->where('karya_id', $karya_id)->exists()) {
            return redirect()->back()->with('error', 'Pesanan sudah ada.');
        }

        $user->karya()->attach($karya_id);

        return redirect()->back()->with('success', 'Pesanan berhasil ditambahkan');
    }

    public function deletePesanan($id_user, $karya_id){
        $user = User::find($id_user);
        $user->karya()->detach($karya_id);

        return redirect()->back()->with('success', 'Pesanan berhasil dihapus');
    }

    public function updatePesanan(Request $request ,$id_user, $karya_id){
        $validatedData = $request->validate([
            'new_user_id' => 'required|exists:users,id_user',
            'new_karya_id' => 'required|exists:karyas,id',
        ]);

        // Remove old pivot entry
        $user = User::find($id_user);
        $user->karya()->detach($karya_id);

        // Add new pivot entry
        $newUser = User::find($validatedData['new_user_id']);
        $newUser->karya()->attach($validatedData['new_karya_id']);

        return redirect()->back()->with('success', 'Pesanan berhasil diupdate');
    }
}
