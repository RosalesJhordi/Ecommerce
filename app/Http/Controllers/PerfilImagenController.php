<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PerfilImagenController extends Controller
{
    public function index($name){
        
    }
    public function store(Request $request){
        $perfil = $request->file('file');
        $nmImage = Str::uuid() . "." . $perfil->extension();
        $imgServe = Image::make($perfil);
        $imgServe->fit(2000,2000);

        $path = public_path('PerfilUsuarios') . '/' . $nmImage;
        $imgServe->save($path);

        return response()->json(['imagen'=>$nmImage]);
    }
}
