@extends('Layouts.App')

@section('titulo')
    Realizar Pedido
@endsection

@section('contenido')
<div class="px-52 justify-center items-center flex flex-col py-10">
    <h1 class="px-10 py-10 uppercase text-2xl font-extrabold font-mono text-blue-900">Realizar Pedido</h1>
    <div class="flex justify-center p-2 border" style="width: 50%; height: 50vh;">
        @if(isset($productos))
            <div class="w-1/2 h-full flex justify-center items-center">
                <img src="{{ asset('ServidorProductos') . '/' . $productos->imagen }}" alt="" class="h-1/2">
            </div>
            <div class="w-1/2 py-2">
                <h1>Nombre: {{ $productos->nombre }}</h1>
                <h1>Descripcion: {{ $productos->descripcion }}</h1>
                <h2>Precio:{{ $productos->precio }}</h2>
                <h2>Descuento: {{ $productos->descuento }} </h2>
                <h2>Total: {{ $productos->precio - $productos->descuento }}</h2>
                <form action="{{ route('Pedidos.store')}}" method="POST">
                    <input type="hidden" name="id_producto" value="{{ $productos->id }}">
                    <input type="text" name="telefono" id="telefono" placeholder="Telefono">
                    <input type="text" name="direccion" id="direccion" placeholder="Direccion">
                    <input type="submit" value="Realizar Pedido">
                </form>
            </div>
        @else
            <p class="text-center uppercase font-2xl font-semibold">No se encontró el producto.</p>
        @endif
    </div>
</div>
@endsection