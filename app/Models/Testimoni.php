<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $fillable = ['nama_panitia', 'isi_testimoni', 'lokasi_masjid','nama_masjid'];
}
