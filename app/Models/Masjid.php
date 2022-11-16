<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masjid extends Model
{
    use HasFactory;

    protected $table = "masjid";

    protected $fillable = ['nama', 'alamat', 'deskripsi', 'foto', 'id_pengurus'];

    public function kajian() {
        return $this->hasMany(Kajian::class);
    }

    public function keuangan() {
        return $this->hasMany(Kajian::class);
    }

    public function pengurus_masjid(){
        return this->belongsTo(PengurusMasjid::class, 'id_pengurus');
    }
}
