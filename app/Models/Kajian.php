<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kajian extends Model
{
    use HasFactory;

    protected $table = "kajian";

    protected $fillable = ['judul_kajian', 'nama_ustaz', 'hari', 'tanggal', 'id_masjid'];

    public function masjid(){
        return $this->belongsTo(Masjid::class,'id_masjid','id');
    }
}
