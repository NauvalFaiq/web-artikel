<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $fillable = [
        'judul_artikel', 'gambar_artikel', 'isi_artikel', 'tanggal_posting', 'id_user'
    ];
}
