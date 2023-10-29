<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Productos;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidosController extends Controller
{
    public function index($id){
        $productos = Productos::find($id);
        return view("secciones.Pedido",compact("productos"));
    }
    public function ver(){
        $pedido = Pedido::where('user_id', auth()->user()->id)->get();
        return view("secciones.PedidosRealizados",compact("pedido"));
    }
    public function store(Request $request){
        $this->validate($request, [
            'telefono' => 'required',
            'direccion' => 'required',
        ]);
        $codigo = Str::random(8);
        Pedido::create([
            'telefono'=> $request->telefono,
            'direccion'=> $request->direccion,
            'user_id' => $request->user()->id,
            'productos_id' => $request->input('id_producto'),
            'codigo' => $codigo
        ]);

        return back()->with('success','Pedido Realizado');
    }
    public function show(){
        $Productos = Productos::where('user_id', auth()->user()->id)->get();
        $Pedidos = Pedido::whereIn('productos_id', $Productos->pluck('id'))->paginate(12);

        return view('secciones.PedidosObtenidos', compact('Pedidos'));
    }
    public function cancel($id){
        $pedido = Pedido::find($id);
        $pedido->delete();

        return back();
    }
}
