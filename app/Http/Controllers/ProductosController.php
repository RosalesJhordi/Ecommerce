<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        return view("secciones.Productos");
    }
    public function agregar(){
        return view("secciones.Agregar");
    }
}
