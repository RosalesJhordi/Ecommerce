<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        $productos = Productos::all();
        return view("secciones.Productos",compact('productos'));
    }
    public function agregar(){
        $productos = Productos::where('user_id', auth()->user()->id)->paginate(6);
        return view("secciones.Agregar",compact('productos'));
    }
    public function store(Request $request){
        $this->validate($request,[
            "nombre"        => 'required',
            "categoria"     => 'required',
            "descripcion"   => "required",
            "precio"        => "required",
            "descuento"     => "required",
            "imagen"        => "required"
        ]);

        Productos::create([
            "nombre"        => $request ->nombre,
            "categoria"     => $request ->categoria,
            "descripcion"   => $request ->descripcion,
            "precio"        => $request ->precio,
            "descuento"     => $request ->descuento,
            "imagen"        => $request ->imagen,
            'user_id'       => auth()->user()->id
        ]);
        $productos = Productos::where('user_id', auth()->user()->id)->paginate(6);
        return redirect()->route('Agregar',compact('productos'));
    }
}
