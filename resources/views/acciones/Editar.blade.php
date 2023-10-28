@extends('Layouts.App')
@vite('resources/js/perfil.js')

@section('titulo')
    {{ $producto->nombre }}
@endsection

@section('contenido')
    <div class="w-full h-screen px-80 flex justify-center items-center">
        <div class="w-1/2 flex flex-col border">
            @if(session('success'))
                <p class="bg-green-500 text-white my-2 rounded-sm text-md p-2 text-center" style="width: 100%;">{{ session('success') }}</p>
            @endif
            <div class="flex gap-5 ">
                <div class="w-1/2 flex items-center bg-blue-100 justify-end">
                    <img src="{{ asset('ServidorProductos') . '/' . $producto->imagen }}"alt="Imagen Producto {{ $producto->nombre }}" class="w-full h-96"/>
                </div>
                <div class="w-1/2 h-full flex items-center justify-start">
                    <form action="{{ route('UpdateProduct',$producto->id)}}" method="POST" class="flex flex-col gap-2 w-full p-5">
                        @csrf
                        <label for="nombre" class="text-xl">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" class="p-2 bg-transparent border rounded-sm text-gray-700">
                        <label for="descripcion" class="text-xl">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" class="p-2 bg-transparent border rounded-sm text-gray-700">{{ $producto->descripcion }}</textarea>
                        <label for="precio" class="text-xl">Precio</label>
                        <input type="number" name="precio" id="precio" value="{{ $producto->precio }}" class="p-2 bg-transparent border rounded-sm text-gray-700">
                        <label for="descuento" class="text-xl">Descuento</label>
                        <input type="number" name="descuento" id="descuento" value="{{ $producto->descuento }}" class="p-2 bg-transparent border rounded-sm text-gray-700">
                        <button type="submit" class="bg-blue-500 p-2 mt-5 rounded-sm text-white">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection