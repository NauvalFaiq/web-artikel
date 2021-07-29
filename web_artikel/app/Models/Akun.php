<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $table = "user";
    protected $timestamps = false;

    protected $fillable = [
        'namalengkap','tanggallahir','inputemail','inputpw','judulartikel','isiartikel'
    ];
}
