<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        $productos = Productos::all();
        $categorias = Productos::distinct('categoria')->pluck('categoria');
        return view("secciones.Productos",compact("productos","categorias"));
    }
    public function filtrar(Request $request){
        $categoria = $request->categoria;
        $productos = Productos::where('categoria', $categoria)->get();
        $categorias = Productos::distinct('categoria')->pluck('categoria');
        return view("secciones.Productos",compact("productos","categorias"));
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
    public function edit($id){
        $producto = Productos::find($id);
        return view('acciones.Editar',compact('producto'));
    }
    public function update(Request $request,$id){
        $product = Productos::find($id);
        $product->update([
            'nombre'=> $request ->nombre,
            'descripcion'=> $request ->descripcion,
            'precio'=> $request ->precio,
            'descuento'=> $request ->descuento
        ]);
        return redirect()->back()->with('success', 'Producto actualizado con éxito');
    }
    public function delete($id){
        $product = Productos::find($id);
        $img = $product->imagen;
        $path = public_path('ServidorProductos') . '/' . $img;
        if (file_exists($path)) {
            unlink($path);
            $product->delete();
            return redirect()->back()->with('success', 'Producto Eliminado con éxito');
        }
    }
}
