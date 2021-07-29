<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $data = ArtikelModel::where('id_user', $request->session()->get('id_user'))->get();
        $halaman = "IndexArtikel";
    
        return view('inside.artikel', compact('data', 'halaman'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar_artikel' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'judul_artikel' => 'required',
            'isi_artikel' => 'required'
        ]);

        $imageName = time().'.'.$request->gambar_artikel->extension();  
        $request->gambar_artikel->move(public_path('uploads'), $imageName);
    
        ArtikelModel::create([
            'judul_artikel' => $request->get('judul_artikel'),
            'isi_artikel' => $request->get('isi_artikel'),
            'gambar_artikel' => 'uploads/'.$imageName,
            'tanggal_posting' => date('Y-m-d H:i:s'),
            'id_user' => $request->session()->get('id_user')
        ]);
     
        return "success";
    }

    public function updateArtikel(Request $request){

        if($request->hasFile('gambar_artikel')){
            $request->validate([
                'gambar_artikel' => 'image|mimes:jpeg,png,jpg|max:10240',
                'judul_artikel' => 'required',
                'isi_artikel' => 'required'
            ]);
            
            $imageName = time().'.'.$request->gambar_artikel->extension();  
            $request->gambar_artikel->move(public_path('uploads'), $imageName);
            
            ArtikelModel::where('id_artikel', request('id_artikel'))->update([
                'judul_artikel' => $request->get('judul_artikel'),
                'isi_artikel' => $request->get('isi_artikel'),
                'gambar_artikel' => 'uploads/'.$imageName
            ]);
        }else{
            $request->validate([
                'judul_artikel' => 'required',
                'isi_artikel' => 'required'
            ]);

            ArtikelModel::where('id_artikel', request('id_artikel'))->update([
                'judul_artikel' => $request->get('judul_artikel'),
                'isi_artikel' => $request->get('isi_artikel')
            ]);
        }

        return "success";
    }

    public function deleteArtikel(Request $request){
        $affectedrow = ArtikelModel::where('id_artikel', request('id_artikel'))->delete();
        
        if($affectedrow){
            return "success";
        }else{
            return "failed";
        }
        
    }
}
