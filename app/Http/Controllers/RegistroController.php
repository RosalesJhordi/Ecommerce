<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
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
            'name'  => $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);
        // User::create([
        //     'name' => $request ->name,
        //     'email' => $request ->email,
        //     'password' => $request ->password
        // ]);
        // auth()->attempt([
        //     'email'=> $request->email,
        //     'password'=> Hash::make($request->password)
        // ]);

        dd('Creado');
        // return redirect()->route('post.index', auth()->user()->name);
    }
}
