<?php

namespace App\Http\Request;

use Illuminate\Http\Request;
use App\Siswa;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{
    public function store(Request $request->all(),
        [
            'nama_siswa' => 'required',
            'tanggal_lahir' => 'required',
            'gender' => 'required',
            
        ]
    )

}