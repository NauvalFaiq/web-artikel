<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = "kelas";
    public $timestaps = false;

    protected $fillable = ['nama_kelas']
}