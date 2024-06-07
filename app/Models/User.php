<?php

namespace App\Models;

use App\Models\Testimoni;
use App\Models\Detail_pesanan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'username',
        'nama_lengkap',
        'password',
        'level',
    ];

    protected $primaryKey = 'id';

    public function testimoni(){
        return $this->hasMany(Testimoni::class, 'id');
    }

    public function karya(){
        return $this->belongsToMany(Karya::class, 'id');
    }
}
