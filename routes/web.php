<?php

use App\Models\Productos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CategoriasController;
use App\Models\User;

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
Route::get('Categorias',[CategoriasController::class,'index'])->name('Categorias'); //vista Categorias
Route::get('Orden',[OrdenController::class,'index'])->name('Orden'); //vista Ordenes
Route::get('Agregar',[ProductosController::class,'agregar'])->name('Agregar'); //vista agregar productos
Route::get('LogOut',[LogOutController::class,'index'])->name('LogOut');

//Vista Registro - formulario

Route::get('Registro',[RegistroController::class,'index'])->name('Registro'); //Vista del formulario de registro
Route::post('Registro',[RegistroController::class,'store']);

Route::get('Login',[LoginController::class,'index'])->name('Login');
Route::post('Login',[LoginController::class,'store']);

Route::post('Info',[RegistroController::class,'informacion'])->name('Informacion');
Route::post('Imagen',[ImagenController::class,'store'])->name('Imagen');
Route::post('AgregarProducto',[ProductosController::class,'store'])->name('AgregarProducto');
Route::post('Categoria',[CategoriasController::class,'filtrar'])->name('Filtrar');