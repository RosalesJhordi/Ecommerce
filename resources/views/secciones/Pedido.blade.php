@extends('Layouts.App')

@section('titulo')
    Realizar Pedido
@endsection

@section('contenido')
<div class="justify-center items-center flex flex-col mt-10 mb-10 div-rp">
    <h1 class="px-10 py-10 uppercase text-2xl font-extrabold font-mono text-blue-900">Realizar Pedido</h1>
    @if(session('success'))
        <p class="bg-green-500 text-white my-2 rounded-sm text-md p-2 text-center" style="width: 50%;">{{ session('success') }}</p>
    @endif
    <div class="flex justify-center p-2 border shadow-xl shadow-gray-300 div-cn" style="width: 50%; height: 50vh;">
        @if(isset($productos))
            <div class="w-1/2 h-full flex justify-center items-center bg-blue-200 div-1">
                <img src="{{ asset('ServidorProductos') . '/' . $productos->imagen }}" alt="" class="h-1/2">
            </div>
            <div class="w-1/2 py-2 div-2">
                <h1 class="text-2xl font-semibold flex justify-between px-5">Nombre: <span class="font-light">{{ $productos->nombre }}</span></h1>
                <h1 class="text-2xl font-semibold flex justify-between px-5"">Descripcion: <span class="font-light">{{ $productos->descripcion }}</span></h1>
                <h1 class="text-2xl font-semibold flex justify-between px-5"">Precio: <span class="font-light">{{ $productos->precio }}</span></h1>
                <h1 class="text-2xl font-semibold flex justify-between px-5"">Descuento: <span class="font-light">{{ $productos->descuento }}</span> </h1>
                <h1 class="text-2xl font-semibold flex justify-between px-5"">Total: <span class="font-light">{{ $productos->precio - $productos->precio * ($productos->descuento / 100) }}</span></h1>
                <form action="{{ route('Pedido.store') }}" method="POST" class="flex flex-col items-center mt-10 px-5">
                    @csrf
                    <input type="hidden" name="id_producto" value="{{ $productos->id }}">
                    <input type="text" name="telefono" id="telefono" placeholder="Telefono" class="w-full p-2 border rounded-sm">
                    @error('telefono')
                        <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                    <input type="text" name="direccion" id="direccion" placeholder="Direccion" class="w-full p-2 mt-5 border rounded-sm">
                    @error('direccion')
                        <p class="bg-red-500 text-white my-2 rounded-sm text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="bg-blue-500 p-2 w-1/2 rounded-sm text-white mt-5">Realizar Pedido</button>
                </form>
            </div>
        @else
            <p class="text-center uppercase font-2xl font-semibold">No se encontró el producto.</p>
        @endif
    </div>
</div>
@endsection