<?php

namespace App\Models;

use App\Models\Ornamen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_bahan',
        'jenis_bahan',
        'deskripsi_bahan',
        'foto_bahan'
    ];

    protected $primaryKey = 'id';

    public function ornamen(){
        return $this->hasMany(Ornamen::class);
    }
}
