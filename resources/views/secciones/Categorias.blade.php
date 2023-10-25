@extends('Layouts.App')

@section('titulo')
    Categorias
@endsection

@section('contenido')
<h1 class="text-center py-10 uppercase text-5xl font-extrabold font-mono text-blue-900">Categorias</h1>
<div class="flex justify-center items-center py-1">
    @foreach ($categorias as $categoria)
        <form action="{{ route('Filtrar') }}" method="POST" class="text-md p-2 font-bold hover:text-blue-700 cursor-pointer">
            @csrf
            <input type="hidden" name="categoria" value="{{ $categoria }}">
            <button type="submit" class="uppercase">{{ $categoria }}</button>
        </form>
    @endforeach
</div>
<div class="flex justify-between flex-wrap p-2 w-full px-52">
    @foreach ($productos as $producto)
    <div class="shadow-black shadow-md rounded-lg flex p-2 w-80 h-40 m-5">
        <div class="w-1/2">
            {{$producto->nombre}}
        </div>
        <img src="{{asset('ServidorProductos') . '/' . $producto->imagen}}" alt="Imagen Producto {{$producto->nombre}}" class="w-44">
    </div>
    @endforeach
</div>
@endsection