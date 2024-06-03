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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'auth']);

Route::get('/register', [RegisterController::class, 'index']);

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

Route::get('/dashboard', [DashboardController::class, 'index'] );