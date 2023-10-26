@extends('Layouts.App')

@section('titulo')
    Pedidos
@endsection

@section('contenido')
<div class="px-52">
    <h1 class="text-4xl text-blue-700 py-5">Pedidos</h1>
    @if (count($pedido) > 0)
        @foreach ($pedido as $pedidos)
            <div class="border p-2 flex justify-between" style="width: 20%; height: 30vh;">
                <div>
                    <h1>{{ $pedidos->producto->nombre }}</h1>
                    <h1>{{ $pedidos->producto->precio }}</h1>
                    <h1>{{ $pedidos->telefono }}</h1>
                    <h1>{{ $pedidos->direccion}}</h1>
                    <h1>{{ $pedidos->codigo }}</h1>
                </div>
                <div>
                    <img src="{{ asset('ServidorProductos') . '/' . $pedidos->producto->imagen }}" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <span>Pedido {{ $pedidos->created_at->diffForHumans() }}</span>
        @endforeach
    @else
        <h2>Los pedidos que realize se mostraran aqui</h2>
    @endif
</div>
@endsection