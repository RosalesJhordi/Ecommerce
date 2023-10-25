<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function index(){
        return view("auth.Registro");
    }
    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        if(!auth()->attempt($request->only('email','password'), $request->remember)){
            return back()->with('mensaje','Credenciales Incorrectas');
        }
        $productos = Productos::all();
        return view('Home', ['productos' => $productos,auth()->user()]);

    }
    public function perfil(Request $request){
        User::create([
            'imagen' => $request->imagen
        ]);
        $productos = Productos::all();
        return view('Home', ['productos' => $productos,auth()->user()]);
    }
}