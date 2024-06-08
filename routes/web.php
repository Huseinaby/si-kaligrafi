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

Route::get('/no-access', [AccessController::class, 'noAccess'])->name('no-access');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'auth']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/portofolio', [KaryaController::class, 'index']);

Route::get('/isi_testimoni', function () {
    return view('isi_tastimoni');
});

Route::get('/testimonis', [TestimoniController::class, 'index']);

Route::get('/testimoni/{testimoni:id}', [TestimoniController::class, 'show']);

Route::get('/ornamens', [OrnamenController::class, 'index']);

Route::get('/ornamens/{ornamen:slug}', [OrnamenController::class, 'show']);

Route::get('/bahans', [BahanController::class, 'index']);

Route::get('/bahans/{bahan:slug}', [BahanController::class, 'type']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('isi-testimoni', function(){
    return view('isi_tastimoni');
});

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

    // Bahan
    Route::get('/bahan', [BahanController::class, 'admBahan'])->name('bahan');

    // Galeri
    Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

    // Karya
    Route::get('/karya', [KaryaController::class, 'admKarya'])->name('karya');

    // Layanan
    Route::get('/layanan', [LayananController::class, 'admLayanan'])->name('layanan');

    Route::get('/testimonis', [TestimoniController::class, 'admtesti'])->name('testimonis');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard/{user:id_user}', [DashboardController::class, 'index'])->name('u-dashboard');
    
    Route::get('/user/testimonis', [KaryaController::class, 'userKarya'])->name('u-testimonis');

});