<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'siswa';
    public $timestaps = false;

    protected $fillable = ['nama_siswa','tanggal_lahir','gender','alamat','id_kelas']
}