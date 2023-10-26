<?php

use App\Models\User;
use App\Models\Productos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RecomendadoController;
use App\Models\Pedido;

Route::get('/', function () {
    $productos = Productos::all();
    $users = [];

    foreach ($productos as $producto) {
        $user_id = $producto->user_id;
        $user = User::find($user_id);
        
        if ($user) {
            $users[] = $user;
        }
    }
    return view('Home',compact('productos','users'));
})->name('Home');

//motrar vistas - views

Route::get('Productos',[ProductosController::class,'index'])->name('Productos'); //vista productos
Route::get('Orden',[OrdenController::class,'index'])->name('Orden'); //vista Ordenes
Route::get('Agregar',[ProductosController::class,'agregar'])->name('Agregar'); //vista agregar productos
Route::get('LogOut',[LogOutController::class,'index'])->name('LogOut');
Route::get('Recomendado',[RecomendadoController::class,'index'])->name('Recomendado');
Route::get('Pedido/{id}',[PedidosController::class,'index'])->name('Pedido');
Route::get('VerPedidos',[PedidosController::class,'ver'])->name('VerPedidos');

//Vista Registro - formulario

Route::get('Registro',[RegistroController::class,'index'])->name('Registro'); //Vista del formulario de registro
Route::post('Registro',[RegistroController::class,'store']);

Route::get('Login',[LoginController::class,'index'])->name('Login');
Route::post('Login',[LoginController::class,'store']);

Route::post('Info',[RegistroController::class,'informacion'])->name('Informacion');
Route::post('Imagen',[ImagenController::class,'store'])->name('Imagen');
Route::post('AgregarProducto',[ProductosController::class,'store'])->name('AgregarProducto');
Route::post('Categoria',[ProductosController::class,'filtrar'])->name('Filtrar');
Route::post('/producto/{producto}/likes',[LikeController::class,'store'])->name('likes.store');
Route::post('Pedido',[PedidosController::class,'store'])->name('Pedido.store');