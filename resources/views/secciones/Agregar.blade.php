@extends('Layouts.App')

@section('titulo')
    Agregar Producto
@endsection

@section('contenido')
<div class="flex justify-between items-center px-52">
  <h1 class=" py-10 uppercase text-2xl font-extrabold font-mono text-blue-900">Productos añadidos por {{auth()->user()->name}}</h1>
  <button class="bg-green-500 p-2 text-white w-28 rounded-md cursor-pointer">AÑADIR</button>
</div>
<div class="flex flex-col px-52" style="width: 100%; height: 100vh;">

</div>
@endsection