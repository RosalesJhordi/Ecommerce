<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index($id){
        $productos = Productos::find($id);
        return view("secciones.Pedido",compact("productos"));
    }
    public function store(){
        dd('Gooooooooo');
    }
}
