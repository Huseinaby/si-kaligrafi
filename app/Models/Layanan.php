<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_layanan',
        'slug',
        'foto_layanan'
    ];
    protected $guarded = ['id'];

    protected $primaryKey =  ['id'];
}
