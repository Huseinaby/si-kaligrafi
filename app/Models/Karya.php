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

    protected $fillable = [
        'ornamen_id',
        'nama_karya',
        'slug',
        'deskripsi_karya',
        'jenis_karya',
        'foto_karya',
        'tgl_pembuatan',
        'lokasi',
        'nama_masjid'
    ];

    protected $primaryKey =  'id';

    protected $with = 'ornamen';

    public function ornamen(){
        return $this->belongsTo(Ornamen::class, 'ornamen_id');
    }

    public function testimoni(){
        return $this->hasMany(Testimoni::class, 'karya_id');
    }

    public function user(){
        return $this->belongsToMany(User::class, 'detail_pesanan','karya_id', 'id_user')->withTimestamps();
    }
}
