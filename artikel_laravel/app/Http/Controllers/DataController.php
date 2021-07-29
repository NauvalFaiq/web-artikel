<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function getDataArtikel(Request $request){
        $arr['data'] = ArtikelModel::where('id_artikel', request('id_artikel'))->first();
        echo json_encode($arr);
        exit;
    }
}
