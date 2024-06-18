<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ornamen extends Model
{
    use HasFactory;

    protected $fillable = [
        'bahan_id',
        'nama_ornamen',
        'deskripsi_ornamen',
        'jenis_ornamen',
        'foto_ornamen',
        'kategori',
        'slug'
    ];

    protected $primaryKey =  'id';

    protected $with = ['bahan'];

    public function bahan(){
        return $this->belongsTo(Bahan::class, 'bahan_id');
    }

    public function karya(){
        return $this->hasMany(Karya::class, 'karya_id');
    }
}
