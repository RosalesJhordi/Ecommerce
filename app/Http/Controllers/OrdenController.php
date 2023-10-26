<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function index(){
        return view("secciones.Orden");
    }
    public function store(Request $request){
        dd($request->id_producto);
    }
}
