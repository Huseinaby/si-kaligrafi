<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $primaryKey =  ['id'];

    public function karya(){
        return $this->belongsTo(Karya::class, 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }
}
