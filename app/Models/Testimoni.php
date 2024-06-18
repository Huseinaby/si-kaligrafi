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
        'isi_testimoni',
        'slug',
        'status',
        'tgl_testimoni'
    ];

    protected $primaryKey =  'id';

    public function karya(){
        return $this->belongsTo(Karya::class, 'karya_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
