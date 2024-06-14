<?php

use App\Models\Testimoni;
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

Route::get('/', function () {
    return view('homepage');
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

    // Karya
    Route::get('/karya', [KaryaController::class, 'admKarya'])->name('karya');

    Route::get('/pesanan', [KaryaController::class, 'admPesanan'])->name('pesanan');

    // Layanan
    Route::get('/layanan', [LayananController::class, 'admLayanan'])->name('layanan');

    // Testimoni
    Route::get('/testimonies', [TestimoniController::class, 'admTesti'])->name('testimonies');
    Route::get('/req-testimonies', [TestimoniController::class, 'admReqTesti'])->name('req-testimonies');
    Route::patch('/testimonies/{testimonial}/status', [TestimoniController::class, 'updateStatus'])->name('testimonials.updateStatus');
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