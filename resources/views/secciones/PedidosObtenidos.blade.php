@extends('Layouts.App')

@section('titulo')
    Pedidos
@endsection

@section('contenido')
<h1 class="px-20 py-5 text-2xl text-blue-800">Pedidos Nuevos</h1>
<div class="px-20 gap-10 flex justify-start flex-wrap p-2 py-5 h-screen">
    @foreach ($Pedidos as $pedido)
        <div class="border border-gray-400 w-96 h-60 flex justify-between items-center">
            <div class="flex justify-center items-center w-1/2 h-full py-5 bg-gray-800">
                <img src="{{ asset('ServidorProductos') . '/' . $pedido->producto->imagen }}" alt="perfil de {{ $pedido->producto->name }}" class="w-full h-full">
            </div>
            <div class="w-1/2 h-full p-2 relative">
                <div class="w-full flex items-center justify-center h-10 text-center">
                    <span class="font-mono uppercase font-extrabold">{{ $pedido->created_at->diffForHumans() }}</span>
                </div>
                <h1 class="font-semibold text-xl">Nuevo pedido</h1>
                <h2 class="font-semibold mt-1">Producto: <span class="text-gray-600 font-semibold">{{ $pedido->producto->nombre }}</span></h2>
                <h2 class="font-semibold mt-1">Usuario: <span class="text-gray-600 font-semibold">{{ $pedido->user->name }}</span></h2>
                <h3 class="font-semibold mt-1">Telefono: <span class="text-gray-600 font-semibold">{{ $pedido->telefono }}</span></h3>
                <h3 class="font-semibold mt-1">Direccion: <span class="text-gray-600 font-semibold">{{ $pedido->direccion }}</span></h3>
                <div class=" py-2 px-2 font-bold absolute bottom-0 right-0">
                    <a href="tel: +51 {{$pedido->telefono}}"><i class="fa-solid fa-square-phone text-sky-700 text-3xl hover:text-sky-400"></i></a>
                    <a href="https://wa.me/+51{{$pedido->telefono}}"><i class="fa-brands fa-square-whatsapp text-green-600 text-3xl hover:text-green-500"></i></a>  
                </div>
            </div>
        </div>
    @endforeach
    <div class="px-52 py-10">
        {{ $Pedidos->links() }}
    </div>
</div>
@endsection