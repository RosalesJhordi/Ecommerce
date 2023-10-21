<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\CategoriasController;

Route::get('/', function () {
    return view('Home');
});

//motrar vistas - views

Route::get('/Productos',[ProductosController::class,'index'])->name('Productos'); //vista productos
Route::get('/Categorias',[CategoriasController::class,'index'])->name('Categorias'); //vista Categorias
Route::get('/Orden',[OrdenController::class,'index'])->name('Orden'); //vista Ordenes

//Vista Registro - formulario

Route::get('/Registro',[RegistroController::class,'index'])->name('Registro'); //Vista del formulario de registro

Route::get('Login',[LoginController::class,'index'])->name('Login');