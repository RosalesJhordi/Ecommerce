<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RecomendadoController;
use App\Http\Controllers\PerfilImagenController;

//Vista Registro - formulario
Route::get('Registro',[RegistroController::class,'index'])->name('Registro'); //Vista del formulario de registro
Route::post('Registro',[RegistroController::class,'store']);
Route::get('Login',[LoginController::class,'index'])->name('Login');
Route::post('Login',[LoginController::class,'store']);

Route::get('/',[HomeController::class,'index'])->name('Home');

//motrar vistas - views

Route::get('Productos',[ProductosController::class,'index'])->name('Productos'); //vista productos
Route::get('Orden',[OrdenController::class,'index'])->name('Orden'); //vista Ordenes
Route::get('Agregar',[ProductosController::class,'agregar'])->name('Agregar'); //vista agregar productos
Route::get('LogOut',[LogOutController::class,'index'])->name('LogOut'); //Cerar sesion
Route::get('Recomendado',[RecomendadoController::class,'index'])->name('Recomendado'); // vista recomendados
Route::get('Pedido/{id}',[PedidosController::class,'index'])->name('Pedido'); //vista para realizar un pedido
Route::get('VerPedidos',[PedidosController::class,'ver'])->name('VerPedidos'); // vista para ver los pedidos realizados
Route::get('Perfil',[PerfilController::class,'index'])->name('EdiatPerfil'); // editar perfil imagen - nombre
Route::get('{id}',[PerfilImagenController::class,'index'])->name('Perfiles'); // ver perfiles
Route::get('Editar/{id}',[ProductosController::class,'edit'])->name('EditarProducto');
Route::post('Editar/{id}',[PostController::class,'edit'])->name('editperfil');
Route::post('Info',[RegistroController::class,'informacion'])->name('Informacion');
Route::post('Imagen',[ImagenController::class,'store'])->name('Imagen');
Route::post('Perfil',[PerfilImagenController::class,'store'])->name('Perfil.img');
Route::post('AgregarProducto',[ProductosController::class,'store'])->name('AgregarProducto');
Route::post('Categoria',[ProductosController::class,'filtrar'])->name('Filtrar');
Route::post('/producto/{producto}/likes',[LikeController::class,'store'])->name('likes.store');
Route::post('Pedido',[PedidosController::class,'store'])->name('Pedido.store');
Route::post('EditarProducto/{id}',[ProductosController::class,'update'])->name('UpdateProduct');
Route::get('Delete/{id}',[ProductosController::class,'delete'])->name('DeleteProduct');