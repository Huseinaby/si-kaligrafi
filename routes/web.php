<?php

use App\Models\Ornamen;
use App\Models\Bahan;
use App\Models\Layanan;
use App\Models\Galeri;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrnamenController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\PesananController;

Route::get('/', function () {
    return view('homepage', [
        'bahans' => Bahan::all(),
        'layanans' => Layanan::all(),
        'ornamens' => Ornamen::all(),
        'galeris' => Galeri::all()
    ]);
});

// Coba

Route::get('/login_new', function () {
    return view('responsive.login_new');
});





Route::get('/no-access', [AccessController::class, 'noAccess'])->name('no-access');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'auth']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/portofolio', [KaryaController::class, 'index']);

Route::get('/testimonis', [TestimoniController::class, 'index']);

Route::get('/testimoni/{testimoni:id}', [TestimoniController::class, 'show']);

Route::get('/ornamens', [OrnamenController::class, 'index']);

Route::get('/ornamens/{ornamen:slug}', [OrnamenController::class, 'show']);

Route::get('/bahans', [BahanController::class, 'index']);

Route::get('/bahans/{bahan:slug}', [BahanController::class, 'type']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


// Admin section
Route::middleware(['auth','admin'])->group(function () {

    // Dashboard
    Route::get('/admin', [DashboardController::class, 'admDash'])->name('dashboard');
    
    // Ornamen
    Route::get('/ornamen', [OrnamenController::class, 'admOrnamen'])->name('ornamen');
    Route::post('/ornamen', [OrnamenController::class, 'store'])->name('ornamen.store');
    Route::put('/ornamen/{slug}', [OrnamenController::class, 'update'])->name('ornamen.update');
    Route::delete('/ornamen/{slug}', [OrnamenController::class, 'destroy'])->name('ornamen.destroy');

    // Users
    Route::get('/users', [UserController::class, 'index'])->name('user');
    Route::post('/users', [UserController::class, 'store'])->name('user.store');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id_user}', [UserController::class, 'destroy'])->name('user.destroy');

    // Bahan
    Route::get('/bahan', [BahanController::class, 'admBahan'])->name('bahan');
    Route::post('/bahan', [BahanController::class, 'store'])->name('bahan.store');
    Route::put('/bahan/{slug}', [BahanController::class, 'update'])->name('bahan.update');
    Route::delete('/bahan/{slug}', [BahanController::class, 'destroy'])->name('bahan.destroy');

    // Galeri
    Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
    Route::post('/galeri/store', [GaleriController::class, 'store'])->name('galeri.store');
    Route::put('/galeri/update/{galeri:slug}', [GaleriController::class, 'update'])->name('galeri.update');
    Route::delete('/galeri/delete/{galeri:slug}', [GaleriController::class, 'destroy'])->name('galeri.destroy');

    // Karya
    Route::get('/karya', [KaryaController::class, 'admKarya'])->name('karya');
    Route::post('/karya/store', [KaryaController::class, 'store'])->name('karya.store');
    Route::put('/karya/update/{slug}', [KaryaController::class, 'update'])->name('karya.update');
    Route::delete('/karya/delete/{slug}', [KaryaController::class, 'destroy'])->name('karya.destroy');

    Route::get('/pesanan', [PesananController::class, 'admPesanan'])->name('pesanan');
    Route::post('/pesanan', [PesananController::class, 'addPesanan'])->name('addPesanan');
    Route::delete('/pesanan/{id_user}/{karya_id}', [PesananController::class, 'deletePesanan'])->name('deletePesanan');
    Route::put('/pesanan/{id_user}/{karya_id}', [PesananController::class, 'updatePesanan'])->name('updatePesanan');

    // Layanan
    Route::get('/layanan', [LayananController::class, 'admLayanan'])->name('layanan');
    Route::post('/layanan', [LayananController::class, 'store'])->name('layanan.store');
    Route::put('/layanan/{slug}', [LayananController::class, 'update'])->name('layanan.update');
    Route::delete('/layanan/{slug}', [LayananController::class, 'destroy'])->name('layanan.destroy');

    // Testimoni
    Route::get('/testimonies', [TestimoniController::class, 'admTesti'])->name('testimonies');
    Route::post('/testimonies', [TestimoniController::class, 'adminStore'])->name('testimonies.store');
    Route::get('/accept_status/{id}', [TestimoniController::class, 'accept_status']);
    Route::get('/reject_status/{id}', [TestimoniController::class, 'reject_status']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('u-dashboard');
    
    Route::get('/user/testimonis', [KaryaController::class, 'userKarya'])->name('u-testimonis');

    Route::get('/user/isi_testimoni/{karya:slug}', [TestimoniController::class, 'isiTest']);

    Route::post('/user/isi_testimoni/{karya:slug}', [TestimoniController::class, 'store']);

    Route::get('/user/edit_testimoni/{testimoni:id}', [TestimoniController::class, 'edit']);

    Route::post('/user/edit_testimoni/{testimoni:id}', [TestimoniController::class, 'update']);

    Route::delete('/user/hapus_testimoni/{testimoni:id}', [TestimoniController::class, 'destroy'])->name('u-hapus-testimoni');

});