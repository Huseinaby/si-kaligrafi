<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'karya_id',
        'nama_panitia',
        'slug',
        'isi_testimoni',
        'tgl_testimoni',
        'lokasi_masjid',
        'nama_masjid'
    ];

    protected $primaryKey =  'id';

    public function karya(){
        return $this->belongsTo(Karya::class, 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }
}
