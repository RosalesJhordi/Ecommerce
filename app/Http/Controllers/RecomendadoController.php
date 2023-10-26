<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Productos;
use Illuminate\Http\Request;

class RecomendadoController extends Controller
{
    public function index() {
        $recomendados = Productos::withCount('likes')->orderBy('likes_count', 'desc')->get();
        return view("secciones.Recomendado", compact("recomendados"));
    }    
}
