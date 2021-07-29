<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $where = array(
            'email' => request('email'),
            'password' => request('password')
        );
        $data = LoginModel::where($where)->first();
        if($data == null){
            return redirect('/login');
        }else{
            $request->session()->put("id_user", $data['id_user']);
            $request->session()->put("nama", $data['nama']);
            $request->session()->put("email", $data['email']);
            $request->session()->put("role", $data['role']);
            return redirect('/artikel');
        }
        exit;
    }

    public function logout(Request $request)
    {
        $request->session()->forget("id_user");
        $request->session()->forget("nama");
        $request->session()->forget("email");
        $request->session()->forget("role");
        return redirect('/');
    }
}
