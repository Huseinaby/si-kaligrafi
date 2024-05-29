<?php

use App\Models\Testimoni;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanController;
use App\Http\Controllers\KaryaController;
use App\Http\Controllers\OrnamenController;
use App\Http\Controllers\TestimoniController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

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

