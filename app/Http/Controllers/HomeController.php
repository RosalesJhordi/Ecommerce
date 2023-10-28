<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Productos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $productos = Productos::all();
        $users = [];

        foreach ($productos as $producto) {
            $user_id = $producto->user_id;
            $user = User::find($user_id);
            
            if ($user) {
                $users[] = $user;
            }
        }
        return view('Home',compact('productos','users'));
    }
}
