<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),
            [
                'nama_kelas' => 'required'
            ]
        );

        if($validator->fails()){
            return Response()->json($validator->errors());
        }

        $simpan = Kelas::create([
            'nama_kelas' => $request->nama_kelas
        ]);

        if($simpan) {
            return Respons()->json(['status'=>1]);
        }
        else{
            return Response()->json(['status'=>0])
        }
    }
}