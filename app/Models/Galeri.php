<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi_galeri',
        'slug',
        'foto_galeri'
    ];
    protected $guarded = ['id'];

    protected $primaryKey =  'id';
}
