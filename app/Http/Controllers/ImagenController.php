<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ImagenController extends Controller
{
    public function store(Request $request){
        $imagen = $request->file('file');

        $nomImage = Str::uuid() . "." . $imagen->extension();
        $imgServe = Image::make($imagen);

        $imgPath = public_path('ServidorProductos') . '/' . $nomImage;
        $imgServe->save($imgPath);

        return response()->json(['imagen'=>$nomImage]);
    }
}
