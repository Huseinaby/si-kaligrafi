<?php

namespace App\Models;

use App\Models\Testimoni;
use App\Models\Detail_pesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'nama_lengkap',
        'password'
    ];

    // protected $primaryKey =  'username';

    public function testimoni(){
        return $this->hasMany(Testimoni::class, 'username');
    }

    public function karya(){
        return $this->belongsToMany(Karya::class, 'username');
    }
}
