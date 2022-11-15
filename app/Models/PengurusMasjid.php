<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PengurusMasjid extends Authenticatable
{
    use HasFactory;

    protected $table = "pengurus_masjid";

    protected $fillable = ['username', 'password'];
}
