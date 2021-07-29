<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
    
        LoginModel::create($request->all());
        
        return redirect('/login');
    }
}
