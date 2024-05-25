<?php

namespace App\Models;

use App\Models\Ornamen;
use App\Models\Testimoni;
use App\Models\Detail_pesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Karya extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $primaryKey =  ['id'];

    public function ornamen(){
        return $this->belongsTo(Ornamen::class, 'id');
    }

    public function testimoni(){
        return $this->hasMany(Testimoni::class, 'id');
    }

    public function user(){
        return $this->belongsToMany(User::class, 'id_karya');
    }
}
