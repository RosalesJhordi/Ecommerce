<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(){
        return view('Panel');
    }
    public function edit($id,Request $request){
        $userid = User::find($id);

        $img =$userid->imagen;
        if($img == null){
            $userid->update([
                'name'  => $request->name,
                'imagen' => $request->imagen
            ]);

            return redirect()->back()->with('success', 'Usuario actualizado con éxito');
        }else{
            $path = public_path('PerfilUsuarios') . '/' . $img;
        
            if (file_exists($path)) {
                unlink($path);
                $userid->update([
                    'name'  => $request->name,
                    'imagen' => $request->imagen
                ]);

                return redirect()->back()->with('success', 'Usuario actualizado con éxito');
            }
        }
    }
}
