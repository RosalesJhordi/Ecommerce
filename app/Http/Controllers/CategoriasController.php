<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(){
        $productos = Productos::all();
        $categorias = Productos::distinct('categoria')->pluck('categoria');
        return view("secciones.Categorias",compact("productos","categorias"));
    }
    public function filtrar(Request $request){
        $categoria = $request->categoria;
        $productos = Productos::where('categoria', $categoria)->get();
        $categorias = Productos::distinct('categoria')->pluck('categoria');
        return view("secciones.Categorias",compact("productos","categorias"));
    }
}
