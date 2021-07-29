<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = ArtikelModel::get();
        return view('welcome', compact('data'));
    }

    public function searchArtikel(Request $request)
    {
        $data = ArtikelModel::where('judul_artikel', 'like', '%'.$request->get('judul_artikel').'%')->get();
        return view('welcome', compact('data'));
    }
}
