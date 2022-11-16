<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;

    protected $table = "keuangan";

    protected $fillable = ['tanggal', 'pengeluaran', 'pemasukkan', 'saldo', 'keterangan', 'id_masjid'];

    public function masjid(){
        return $this->belongsTo(Masjid::class, 'id_masjid', 'id');
    }
}
