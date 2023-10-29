@extends('Layouts.App')

@section('titulo')
    Pedidos
@endsection

@section('contenido')
<h1 class="text-4xl text-blue-700 py-5 px-20">Pedidos</h1>
<div class="px-20 flex gap-10 flex-wrap h-screen">
    @if (count($pedido) > 0)
        @foreach ($pedido as $pedidos)
            <div class="border p-2 flex justify-between w-96 h-60">
                <div class="w-1/2 h-full flex  flex-col">
                    <h1 class="text-lg font-bold">Producto:   <span class="text-gray-800 font-normal">{{ $pedidos->producto->nombre }}</span></h1>
                    <h1 class="text-lg font-bold">Precio:     <span class="text-gray-800 font-normal">{{ $pedidos->producto->precio }}</span></h1>
                    <h1 class="text-lg font-bold">Telefono:   <span class="text-gray-800 font-normal">{{ $pedidos->telefono }}</span></h1>
                    <h1 class="text-lg font-bold">Ubicacion:  <span class="text-gray-800 font-normal">{{ $pedidos->direccion}}</span></h1>
                    <h1 class="text-lg font-bold">Codigo:     <span class="text-gray-800 font-normal">{{ $pedidos->codigo }}</span></h1>
                    <div class="relative w-full h-10 mt-5 flex justify-center items-center">
                        <a href="{{route('Cancelar',$pedidos->id)}}" class="bottom-0 bg-red-500 p-1 rounded-md text-center w-1/2 text-white">Cancelar</a>
                    </div>
                </div>
                <div class="w-1/2 h-full bg-sky-200 flex justify-center items-center">
                    <img src="{{ asset('ServidorProductos') . '/' . $pedidos->producto->imagen }}" alt="" class="h-full w-full">
                </div>
            </div>
        @endforeach
    @else
        <h2>Los pedidos que realize se mostraran aqui</h2>
    @endif
</div>
@endsection