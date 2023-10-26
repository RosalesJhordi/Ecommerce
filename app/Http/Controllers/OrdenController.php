<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function index(){
        $pedidos = Pedido::where('user_id', auth()->user()->id)->get();
        return view("secciones.Orden",compact("pedidos"));
    }
    public function store(Request $request){
        dd($request->id_producto);
    }
}
